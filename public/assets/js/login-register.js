$(document).ready(async function(){


    const baseURL=window.location.origin;
    const afterLoginUrl='/dashboard';
    var walletAddress=null;

    //--------------------------------------------------------------------------------

    if(!window.ethereum)
      return toastr.error('Please First connect to Metamask or Trust wallet.');

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
        walletAddress=accounts[0].toLowerCase();
     });

    //--------------------------------------------------------------------------------

    const CheckReferral=async(referral)=>{
        try{
            return await $.get(baseURL+`/api/check-referral?referral=${referral}`);
        }
        catch(err){
            return err.responseJSON;
        }
    }
    //--------------------------------------------------------------------------------

    $('#referral').on('change',async function(){

        try
        {
        let val=$(this).val();
        let check= await CheckReferral(val);
        if(!check.success)
               return $('#referral-err').text(check.message);
        else
            { $('#referral').attr('disabled',true);
                return $('#referral-err').text('');}
        }
        catch(err)
        {console.log(err); }
    });
    //--------------------------------------------------------------------------------
    $('#register-btn').on('click',async function(){
        try
        {
          $('#register-btn').attr('disabled',true);

          let val=$('#referral').val().trim();

          if(!val)
          {setTimeout(() => $('#register-btn').attr('disabled',false), 1000); return toastr.error('Referral code is required.')}

          let check= await CheckReferral(val);

          if(!check.success)
             {setTimeout(() => $('#register-btn').attr('disabled',false), 1000); return toastr.error(check.message)}

             $('#register-btn').text('Loading...');

             return $.post({url:baseURL+'/api/register',data:{wallet_address:walletAddress,referral:val}}).then((d)=>{
                if(d.success)
                {    $('#register-btn').text('Registered');
                    toastr.success(d.message);
                   return setTimeout(()=>Login(walletAddress),700) ;
                }
            }).catch((err)=>{ $('#register-btn').text('Register');toastr.error(err.responseJSON.message);return setTimeout(() => {
                window.location.replace(baseURL);
            }, 1500);});
        }
        catch(err)
        {
            console.log(err);
        }
    });

    //--------------------------------------------------------------------------------
     $('#login').on('click',async function(){

        $(this).attr('disabled',true);

        if(!walletAddress){ $(this).attr('disabled',false); return toastr.error('Please first connect to wallet.');}

       return Login(walletAddress);
     });
    //---------------------------------------------------------------------------------

    const Login=async(wallet_address)=>{

        return $.post({url:baseURL+'/api/login',data:{wallet_address},})
        .then((data)=>{
            if(data.success){
             toastr.success(data.message);
             localStorage.setItem('address',walletAddress.toLowerCase());
             return setTimeout(()=>{window.location.replace(baseURL+afterLoginUrl);},1200);
            }
        })
        .catch((err)=>{toastr.error(err.responseJSON.message); setTimeout(()=>location.reload(),1000) ;});
    }
    // ---------------------------------------------------------------------------------



});
