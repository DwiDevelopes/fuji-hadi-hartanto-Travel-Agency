const express = require('express');
const path = require('path');
const fs = require('fs');

const app = express();
const PORT = 3000;

// Middleware
app.use(express.static('public'));
app.use(express.json());

// Load cookie config
const cookieConfig = JSON.parse(fs.readFileSync('cookies-config.json', 'utf-8'));

// API to get cookie settings
app.get('/api/cookie-settings', (req, res) => {
  res.json(cookieConfig);
});

// API to save user consent
app.post('/api/save-consent', (req, res) => {
  const consent = req.body;
  console.log('User consent saved:', consent);
  // In a real app, save to database
  res.json({ status: 'success' });
});

// Serve index.html
app.get('index.html', (req, res) => {
  res.sendFile(path.join(__dirname,'index.html'));
});

app.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}`);
});