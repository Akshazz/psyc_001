const express = require('express');
const bodyParser = require('body-parser');
const MongoClient = require('mongodb').MongoClient;

const app = express();
const port = 3000;
const restrictionTime = 42 * 60 * 60 * 1000; // 42 hours in milliseconds

app.use(bodyParser.json());

MongoClient.connect('mongodb://localhost:27017', { useUnifiedTopology: true }, (err, client) => {
    if (err) throw err;
    const db = client.db('mydatabase');
    const collection = db.collection('submissions');

    app.post('/submit', async (req, res) => {
        const ipAddress = req.ip; // Get IP address of the requester
        const lastSubmission = await collection.findOne({ ip: ipAddress });

        if (lastSubmission) {
            const currentTime = Date.now();
            if (currentTime - lastSubmission.timestamp < restrictionTime) {
                const remainingTime = restrictionTime - (currentTime - lastSubmission.timestamp);
                return res.status(403).send(`You must wait ${Math.floor(remainingTime / (60 * 60 * 1000))} hours before submitting again.`);
            }
        }

        // Record the new submission
        await collection.updateOne(
            { ip: ipAddress },
            { $set: { timestamp: Date.now() } },
            { upsert: true }
        );

        res.send('Form submitted successfully!');
    });

    app.listen(port, () => {
        console.log(`Server listening on port ${port}`);
    });
});
