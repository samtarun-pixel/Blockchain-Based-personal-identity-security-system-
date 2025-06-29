// src/components/SignUp.js
import React, { useState } from 'react';
import Web3 from 'web3';

const SignUp = () => {
  const [identityData, setIdentityData] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();
    const web3 = new Web3(Web3.givenProvider || 'http://localhost:8545');
    const contractABI = [/* ABI from Mamun5011's repo */];
    const contractAddress = '/* Deployed contract address */';
    const contract = new web3.eth.Contract(contractABI, contractAddress);
    const accounts = await web3.eth.getAccounts();

    await contract.methods.registerIdentity(identityData).send({ from: accounts[0] });
  };

  return (
    <form onSubmit={handleSubmit}>
      <input
        type="text"
        value={identityData}
        onChange={(e) => setIdentityData(e.target.value)}
        placeholder="Enter Identity Data"
      />
      <button type="submit">Register</button>
    </form>
  );
};

export default SignUp;
