const express = require('express');
const multer = require('multer');
const bodyParser = require('body-parser');
const mailgun = require('mailgun-js');
const path = require('path');

const app = express();
const DOMAIN = 'https://app.mailgun.com/app/sending/domains/sandbox9b45d4c93910407d932e7752f1b50839.mailgun.org'; // Your Mailgun domain
const mg = mailgun({ apiKey: '0133a86f19d406d6829cf40363227953-3724298e-5f3af23d', domain: DOMAIN });

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Configure Multer for file upload
const storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, 'uploads/');
  },
  filename: (req, file, cb) => {
    cb(null, Date.now() + path.extname(file.originalname)); // Save with timestamp
  }
});

const upload = multer({ storage: storage });

// Handle form submission
app.post('/submit-resume', upload.single('resume'), (req, res) => {
  const { name, email, message } = req.body;
  const resumeFilePath = req.file.path;

  const data = {
    from: `${name} <${email}>`,
    to: 'smartkeshav97@gmail.com', // Company's HR email
    subject: `New Resume Submission from ${name}`,
    text: message,
    attachment: req.file.path, // Attach the resume file
  };

  mg.messages().send(data, (error, body) => {
    if (error) {
      return res.status(500).send('Error sending email: ' + error);
    }
    res.send('Resume successfully submitted!');
  });
});

// Start server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
