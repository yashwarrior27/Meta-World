$(document).ready(async function(){


    const baseURL=window.location.origin;
    var Token=null;
    let accounts = await window.ethereum.request({ method: 'eth_requestAccounts' });
    var walletAddress=accounts[0].toLowerCase();

    var web3=new Web3(window.ethereum);

    const chainId="0x13882";
    const networkName='Test Chain';


    //-------------------------------------------------------------------------

      window.ethereum.on('accountsChanged', function (accounts) {

        walletAddress=accounts[0].toLowerCase();
        let address=localStorage.getItem('address');
        if(!address || address!=walletAddress)
        {return logout();}

     });
    //  -------------------------------------------------------------------------

    const contract_address='0xc0a82a7E6E5BC19696cb8078D3B9465658EeF44C';

    const contract_abi=[{"inputs":[{"internalType":"uint256","name":"_withdrawFee","type":"uint256"},{"internalType":"uint256","name":"_depositFees","type":"uint256"},{"internalType":"address payable","name":"_feesAddress","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amu","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"DepositAt","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[{"internalType":"uint256","name":"usdtAmount","type":"uint256"}],"name":"deposit","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"depositFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"feesAddress","outputs":[{"internalType":"address payable","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"investors","outputs":[{"internalType":"bool","name":"registered","type":"bool"},{"internalType":"uint256","name":"invested","type":"uint256"},{"internalType":"uint256","name":"paidAt","type":"uint256"},{"internalType":"uint256","name":"withdrawn","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"totalInvested","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_depositFees","type":"uint256"}],"name":"updateDepositFees","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address payable","name":"_newFeesAddress","type":"address"}],"name":"updateFeesAddress","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"_withdrawFee","type":"uint256"}],"name":"updateWithdrawalFees","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"withdrawFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address payable","name":"_to","type":"address"},{"internalType":"address","name":"_token","type":"address"},{"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"withdrawal","outputs":[],"stateMutability":"nonpayable","type":"function"}];

    const usdt_address='0xf4Ed0483958604a56C631429bddd672cA29f7340';

    const usdt_abi=[{"inputs":[{"internalType":"address","name":"initialOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"allowance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientAllowance","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"uint256","name":"balance","type":"uint256"},{"internalType":"uint256","name":"needed","type":"uint256"}],"name":"ERC20InsufficientBalance","type":"error"},{"inputs":[{"internalType":"address","name":"approver","type":"address"}],"name":"ERC20InvalidApprover","type":"error"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"}],"name":"ERC20InvalidReceiver","type":"error"},{"inputs":[{"internalType":"address","name":"sender","type":"address"}],"name":"ERC20InvalidSender","type":"error"},{"inputs":[{"internalType":"address","name":"spender","type":"address"}],"name":"ERC20InvalidSpender","type":"error"},{"inputs":[{"internalType":"address","name":"owner","type":"address"}],"name":"OwnableInvalidOwner","type":"error"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"OwnableUnauthorizedAccount","type":"error"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"value","type":"uint256"}],"name":"burn","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"burnFrom","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"from","type":"address"},{"internalType":"address","name":"to","type":"address"},{"internalType":"uint256","name":"value","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}];
// -----------------------logout-----------------------------------------------

$('.logout').on('click',function(){

    return logout();
});

//-----------------------------------------------------------------------------
   const logout=()=>{
    return $.get(baseURL+'/api/logout')
    .then((res)=>{
        if(res.success){

            toastr.success(res.message);
            return setTimeout(()=>window.location.replace(baseURL),1700);
        }
    })
    .catch((err)=>{setTimeout(()=>location.reload(),1000); return toastr.error(err.responseJSON.message)});
   }

   //-----------------------------------------------------------------------------

   $('.stake-btn').on('click',async function(){

    $('.stake-btn').attr('disabled',true);


    if(window.ethereum.chainId!=chainId)
    {
      await window.ethereum.request({
           method: 'wallet_switchEthereumChain',
           params: [{ chainId }]
         })
           .then(()=>toastr.success(`Network switched to ${networkName}.`,'Success'))
           .catch((error) =>{toastr.error(`Please switching to ${networkName} network.`,'Failed')});
        return setTimeout(()=>location.reload(),1000);
    }

    let stake=$(this).attr('stake-pack');
    let val=Number($(`#${stake}-amt`).val());

    if(!val)
       { setTimeout(()=>$('.stake-btn').attr('disabled',false),700);   return toastr.error('Amount field is required.')};


       let check=await CheckTrans(stake);

       if(!check.success)
          {setTimeout(()=>$('.stake-btn').attr('disabled',false),700); return toastr.error(check.message);}

       if(check.data.check)
         { setTimeout(()=>location.reload(),1000); return toastr.info('Already have pending request.');}

       if(Number(check.data.amount)!=Number(val))
       { setTimeout(()=>$('.stake-btn').attr('disabled',false),700); return toastr.error('Amount is invalid.');}

       let token=check.data.price*val;
    //   let token=val;

       let checkAllow= await checkAllowence(walletAddress);

       if(Number(web3.utils.fromWei(checkAllow,'ether')) <Number(token))
       {
           $('.stake-btn').text('Approve');
            await Approve(walletAddress,Number(token));
            $('.stake-btn').text('Approved');
             setTimeout(()=>location.reload(),1000);
            return toastr.success('Transaction successful.','Approved');
       }

       window.addEventListener("beforeunload", reloadprevent);

       let Contract = new web3.eth.Contract(contract_abi,contract_address);

      return await Contract.methods.deposit(web3.utils.toWei(Number(token).toString(), 'ether')).send({from:walletAddress},async function(err,res){

        if(err==null)
        {
           let check = await CreateTrans(res,stake,token);
           if(check)
             setTimeout(()=>SuccessTrans(),20000);
           else
             setTimeout(()=>location.reload(),1000);
              }
              else
              {  $('.stake-btn').attr('disabled',false);
                 toastr.error(err.message,'Error');
              }
             return  window.removeEventListener("beforeunload",reloadprevent);

             })
             .then(()=>SuccessTrans())
   });


   //-----------------------------------------------------------------------------

   const CheckTrans=async(pack=null)=>{
       try
       {return await $.get(baseURL+'/api/check-trans'+`${pack!=null?`?package=${pack}`:''}`);}
       catch(err)
       {return err.responseJSON;}
    }
   //-----------------------------------------------------------------------------

const checkAllowence= async(walletAddress)=>{

    Token= new web3.eth.Contract(usdt_abi,usdt_address);

 return  await Token.methods.allowance(walletAddress,contract_address)
         .call({from:walletAddress},function (err,res) {
        if(err!=null){
            setTimeout(()=>location.reload(),1000);
         return toastr.error('Something went wrong. Please try again later.');
        }
        });
 }
//---------------------------------------------------------------------------------
 const Approve=async (walletAddress,amount)=>{

    Token= new web3.eth.Contract(usdt_abi,usdt_address);

    var amt= await web3.utils.toWei(amount.toString());

   return await Token.methods.approve(contract_address,amt).send({from:walletAddress},(err,result)=>{
        if(err!=null)
              {setTimeout(() => {location.reload()},1000); return toastr.error('Transaction is cancelled.','Rejected');}
        else{
            setTimeout(()=>{toastr.success('Transaction Approved.','Approved');return setTimeout(()=>location.reload(),700)},12000);
            return toastr.info('Please wait for Approving.','Processing...');
        }
        });
 }

//----------------------------------------------------------------------------------
function reloadprevent(event){event.returnValue = "Please don't reload otherwise your transaction will be lost."; }
// ------------------------------------------------------------------------------------

const CreateTrans=async(transaction_id,package,token)=>{
    try
    {
     let trans= await $.post({url:baseURL+'/api/create-trans',data:{transaction_id,package,token}});

     if(trans.success)
         {toastr.info('Please wait.','Transaction Confirming...') ;return true;}
     else
        {toastr.error('Something went wrong.'); return false;}
    }
    catch(err)
    {
        setTimeout(()=>location.reload(),1000);
       toastr.error(err.responseJSON.message);
       return false;
    }
}

// ------------------------------------------------------------------------------------



const SuccessTrans=async()=>{
    try
    {
        let trans= await $.get(baseURL+'/api/success-trans');
        if(trans.success)
           {toastr.success('Transaction successfully confirmed.','Transaction Confirmed');
           return  setTimeout(()=>location.reload(),1000);
           }
        else
           {toastr.error('Transaction Failed.','Failed');
          return setTimeout(()=>location.reload(),1000);
             }
    }
    catch(err)
    {
       toastr.error(err.responseJSON.message);
    }
}
// ------------------------------------------------------------------------------------


const updateTrans= setTimeout(async ()=>{

    let checkpending= await CheckTrans();

    if(checkpending.data.check){
      toastr.info('Please wait.','Transaction Confirming...');
       return setTimeout(() => {
     SuccessTrans();
    }, 1000);

    }
},2000);

// ------------------------------------------------------------------------------------


function copyToClipboard(text) {
    var tempInput = document.createElement("input");
    tempInput.value = text;
    document.body.appendChild(tempInput);
    tempInput.select();
    tempInput.setSelectionRange(0, 99999);
    document.execCommand("copy");
    document.body.removeChild(tempInput);
  }

  $('.copy_code').on('click', function (e) {
    var copyGfGText = document.getElementById("referral_code").innerHTML;
     (async () => {
    try {
      await copyToClipboard(copyGfGText);
      toastr.success('Link copied to clipboard');
    } catch (err) {
      toastr.error('Failed to copy: ', err);
    }
    })()
    });

    $('.copy_link').on('click', function (e) {
        var copyGfGText = document.getElementById("referral_link").innerHTML;
         (async () => {
        try {
          await copyToClipboard(copyGfGText);
          toastr.success('Link copied to clipboard');
        } catch (err) {
          toastr.error('Failed to copy: ', err);
        }
        })()
        });
// ------------------------------------------------------------------------------------

});
