$(document).ready(async function(){

    const baseURL=window.location.origin;

    var walletAddress=null;


    const chainId="0x13882";
    const networkName='Test Chain';

    //--------------------------------------------------------------------------------

      await window.ethereum.enable()
      .then((data)=>walletAddress=data[0].toLowerCase())
      .catch((err)=>{
          if(err.code==4001)
          toastr.error('connection cancelled.','Failed');
          if(err.code==-32002)
          toastr.info('Please connect to Wallet.','Already open');
       });

    //--------------------------------------------------------------------------------

    window.ethereum.on('accountsChanged', function (accounts) {
          location.reload();
     });

     //--------------------------------------------------------------------------------

     if(!walletAddress)
        return toastr.error('Something went wrong.');

    if(window.ethereum.chainId!=chainId)
        {
          await ethereum.request({
               method: 'wallet_switchEthereumChain',
               params: [{ chainId }]
             })
               .then(()=>toastr.success(`Network switched to ${networkName}.`,'Success'))
               .catch((error) =>{toastr.error(`Please switching to ${networkName} network.`,'Failed')});
            return setTimeout(()=>location.reload(),1000);
        }

        $('#wallet-address').text('Loading...');
        $('#usdt-bal').text('...');
        $('#meta-bal').text('...');
        $('#wallet-address').text(walletAddress);

     var web3=new Web3(window.ethereum);

    const usdtaddress='0xB6Bb3638853e4D27FFabe20Aaa3297A8ABdb301d';
    const usdtabi=[{"inputs":[{"internalType":"address","name":"initialOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}];

    const tokenaddress='0xf4Ed0483958604a56C631429bddd672cA29f7340';
    const tokenabi=[{"inputs":[{"internalType":"address","name":"initialOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"value","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"burnFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}];

    const idoaddress='0xE4ec7758bAd7d081CB4B281fdf87d1d13cC2a1Fd';
    const idoabi=[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[{"internalType":"uint256","name":"usdtAmount","type":"uint256"}],"name":"BuyTokenWithUSDT","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"MIN_DEPOSIT_USDT","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_USDTAmt","type":"uint256"}],"name":"SetMinUSDT","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_tokenprice","type":"uint256"},{"internalType":"uint256","name":"_tokenpriceDecimal","type":"uint256"}],"name":"UpdateTokenPrice","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"buytokenaddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"contractAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"investors","outputs":[{"internalType":"bool","name":"registered","type":"bool"},{"internalType":"uint256","name":"invested","type":"uint256"},{"internalType":"uint256","name":"paidAt","type":"uint256"},{"internalType":"uint256","name":"withdrawn","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenprice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenpriceDecimal","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalInvested","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"tokenAddress","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"withdrawToken","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}];

    const usdtcontract=new web3.eth.Contract(usdtabi,usdtaddress);
    const tokencontract=new web3.eth.Contract(tokenabi,tokenaddress);
    const idocontract= new web3.eth.Contract(idoabi,idoaddress);

    const usdtbal=Number(web3.utils.fromWei(await usdtcontract.methods.balanceOf(walletAddress).call(),'mwei'));
    const tokenbal=Number(web3.utils.fromWei(await tokencontract.methods.balanceOf(walletAddress).call()));

    $('#usdt-bal').text(usdtbal.toFixed(4));
    $('#meta-bal').text(tokenbal.toFixed(4));

    $('#buy-btn').attr('disabled',false);

    $('#usdt-amt').on('input',async function(){

        $('#meta-amt').val('');
        let val=$(this).val();

        if(!val)
           return $('#usdt-err').text('This field is reuqired.');
        else if(isNaN(val))
           return $('#usdt-err').text('Please enter numeric value.');
        else if(Number(val)< 1)
            return $('#usdt-err').text('Minimum 1 USDT required.');
        else
          $('#usdt-err').text('');

         val=Number(val);

       let tokenprice= Number(await idocontract.methods.tokenprice().call());
       let tokenpricedecimal= Number(await idocontract.methods.tokenpriceDecimal().call());

       let token=val*10**tokenpricedecimal/tokenprice;

         $('#meta-amt').val(token.toFixed(4));
    });

    $('#buy-btn').on('click',async function(){

        let val=$('#usdt-amt').val();

        if(!val)
           return $('#usdt-err').text('This field is reuqired.');
        else if(isNaN(val))
           return $('#usdt-err').text('Please enter numeric value.');
        else if(Number(val)< 1)
            return $('#usdt-err').text('Minimum 1 USDT required.');
        else
          $('#usdt-err').text('');

         $('#buy-btn').attr('disabled',true);
         $('#usdt-amt').attr('disabled',true);

         val=Number(val);

         if(val > usdtbal)
           {
            toastr.error('Insufficient Balance.');
            return setTimeout(() =>location.reload(), 1000);
           }

     let check= Number(web3.utils.fromWei(await checkAllowence(walletAddress),'mwei'));

     if(check < val)
        {
            $('#buy-btn').text('Approve');
            await Approve(walletAddress,val);
            $('#buy-btn').text('Approved');
            setTimeout(()=>location.reload(),1000);
           return toastr.success('Transaction successful.','Approved');
        }

        window.addEventListener("beforeunload", reloadprevent);


      return await idocontract.methods.BuyTokenWithUSDT(web3.utils.toWei(val.toString(),'mwei')).send({from:walletAddress},async function(err,res){
        if(err==null)
        {
            toastr.info('Please wait.','Transaction Confirming...') ;
            setTimeout(() => {
                toastr.success('Transaction successfully confirmed.','Transaction Confirmed');
                return setTimeout(()=>location.reload(),700);
            }, 20000);
        }
              else
              {
                 toastr.error(err.message,'Error');
                 setTimeout(() =>location.reload(), 1000);
              }
             return  window.removeEventListener("beforeunload",reloadprevent);
             })
             .then(()=>{  toastr.success('Transaction successfully confirmed.','Transaction Confirmed');
             return setTimeout(()=>location.reload(),700)});

    })


    const checkAllowence= async(walletAddress)=>{

       let Token= new web3.eth.Contract(usdtabi,usdtaddress);

     return  await Token.methods.allowance(walletAddress,idoaddress)
             .call({from:walletAddress},function (err,res) {
            if(err!=null){
                setTimeout(()=>location.reload(),1000);
             return toastr.error('Something went wrong. Please try again later.');
            }
            });
     }
    //---------------------------------------------------------------------------------
     const Approve=async (walletAddress,amount)=>{

       let Token= new web3.eth.Contract(usdtabi,usdtaddress);

        var amt= await web3.utils.toWei(amount.toString(),'mwei');

       return await Token.methods.approve(idoaddress,amt).send({from:walletAddress},(err,result)=>{
            if(err!=null)
                  {setTimeout(() => {location.reload()},1000); return toastr.error('Transaction is cancelled.','Rejected');}
            else{
                setTimeout(()=>{toastr.success('Transaction Approved.','Approved');return setTimeout(()=>location.reload(),700)},13000);
                return toastr.info('Please wait for Approving.','Processing...');
            }
            });
     }

    //----------------------------------------------------------------------------------
    function reloadprevent(event){event.returnValue = "Please don't reload otherwise your transaction will be lost."; }
    // ------------------------------------------------------------------------------------
});
