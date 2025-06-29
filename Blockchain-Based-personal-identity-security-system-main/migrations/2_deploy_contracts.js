// migrations/2_deploy_contracts.js
const Identity = artifacts.require("Identity");

module.exports = function(deployer) {
  deployer.deploy(Identity);
};
