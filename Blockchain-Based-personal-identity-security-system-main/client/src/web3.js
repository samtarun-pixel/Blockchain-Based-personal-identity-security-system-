// src/web3.js
const Web3 = require('web3');
const contractABI = [/* ABI from build/contracts/Identity.json */];
const contractAddress = '/* Deployed contract address */';

const web3 = new Web3('http://localhost:8545');
const contract = new web3.eth.Contract(contractABI, contractAddress);

async function registerIdentity(identityData) {
  const accounts = await web3.eth.getAccounts();
  await contract.methods.registerIdentity(identityData).send({ from: accounts[0] });
}

module.exports = { registerIdentity };
