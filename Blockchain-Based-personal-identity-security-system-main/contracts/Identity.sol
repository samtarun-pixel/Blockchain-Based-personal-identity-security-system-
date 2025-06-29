// contracts/Identity.sol
pragma solidity ^0.8.0;

contract Identity {
    struct User {
        string data;
    }

    mapping(address => User) public users;

    function registerIdentity(string memory _data) public {
        users[msg.sender] = User(_data);
    }
}
