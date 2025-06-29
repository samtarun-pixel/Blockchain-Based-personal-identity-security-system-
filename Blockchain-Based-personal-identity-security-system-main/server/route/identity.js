// server/routes/identity.js
const express = require('express');
const router = express.Router();
const Web3 = require('web3');
const web3 = new Web3('http://localhost:8545');
const contractABI = [/* ABI */];
const contractAddress = '/* Deployed contract address */';
const contract = new web3.eth.Contract(contractABI, contractAddress);

router.post('/register', async (req, res) => {
  const { identityData } = req.body;
  const accounts = await web3.eth.getAccounts();
  await contract.methods.registerIdentity(identityData).send({ from: accounts[0] });
  res.send('Identity registered');
});

module.exports = router;
