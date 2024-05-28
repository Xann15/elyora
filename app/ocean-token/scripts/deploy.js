const hre = require("hardhat");

async function main() {
  const MidToken = await hre.ethers.getContractFactory("MidToken");
  const midToken = await MidToken.deploy(100000000, 50);

  await midToken.deployed();

  console.log("Ocean Token deployed: ", midToken.address);
}

main().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
