let volumeIconStatus=1;
const volIconBox = document.getElementById('volIconBox');
function volumeIconChange(){
    let icon1 = '<img src="volumeup.svg" alt="" style="width:5vw;" onclick="volumeIconChange()"></img>';
    let icon2 = '<img src="volumedown.svg" alt="" style="width:5vw;" onclick="volumeIconChange()"></img>';
    console.log();
    if(volumeIconStatus==1)
    {
        //zmien na ikone wylaczona
        volumeIconStatus=0
        volIconBox.innerHTML=icon2;
    }else 
    {
        //zmien na ikone wlaczona
        volumeIconStatus=1;
        volIconBox.innerHTML=icon1;
    }
}