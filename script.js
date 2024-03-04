let backVal = 0;
let volumeIconStatus = 1;
let pauseStopIcon = 1;
let lastStation=null;
const volumeValueBox = document.getElementById("volumeValueBox");
const volIconBox = document.getElementById("volIconBox");
const volumeIconChangeClickEvent = volIconBox.addEventListener("click", () => {
  let icon1 = '<img src="volumeup.svg" style="width:5vw;"></img>';
  let icon2 = '<img src="volumedown.svg" style="width:5vw;"></img>';
  if (volumeIconStatus == 1) {
    //zmien na ikone wylaczona
    backVal = handleVolumeChange();
    volumeValueBox.innerHTML = 0 + "%";
    volumeSet(0);
    volumeIconStatus = 0;
    volIconBox.innerHTML = icon2;
  } else {
    if (backVal != 0) {
      volumeSet(backVal);
      volumeValueBox.innerHTML = Math.round(backVal / 207 * 100) + "%";
      backVal = 0;
    }
    //zmien na ikone wlaczona
    volumeIconStatus = 1;
    volIconBox.innerHTML = icon1;
  }
});

const pauseStopHook = document.getElementById("pauseStop");
const pauseStop = pauseStopHook.addEventListener("click", () => {
  let icon3 = '<img src="pause.svg" alt="pause/stop" style="width:5vw">';
  let icon4 = '<img src="playarrow.svg" alt="pause/stop" style="width:5vw">';
  if (pauseStopIcon == 1) {
    pauseStopIcon = 0;
    pauseStopHook.innerHTML = icon4;
    pStop();
  } else {
    pauseStopIcon = 1;
    pauseStopHook.innerHTML = icon3;
    pPlay(lastStation);
  }
});

// Get the volume slider
const volumeSlider = document.getElementById("volumeSlider");

// Function to handle volume change
function handleVolumeChange() {
  // Retrieve the current value
  const currentVolume = volumeSlider.value;
  volumeValueBox.innerHTML = Math.round(currentVolume / 207 * 100) + "%";
  return currentVolume;
}


// Attach the event listener to the volume slider
volumeSlider.addEventListener("input", () => {
  let currentVolume = handleVolumeChange();
  volumeSet(currentVolume);
});

async function volumeSet(currentVolume) {
  let x = await fetch("http://localhost/radio/php_commands/setvolume.php?volume=" + currentVolume);
  let y = await x.text();
}

async function pPlay(number) {
  let x = await fetch("http://localhost/radio/php_commands/play.php?v="+number);
  let y = await x.text();
  console.log(y);
}

async function pStop() {
  let x = await fetch("http://localhost/radio/php_commands/stop.php");
  let y = await x.text();
  console.log(y);
}



let play = "yes";

function ustawStacje(number){
  pPlay(number);
  lastStation=number;
}