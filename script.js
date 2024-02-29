let volumeIconStatus = 1;
let pauseStopIcon = 1;
const volumeValueBox = document.getElementById("volumeValueBox");
const volIconBox = document.getElementById("volIconBox");
const volumeIconChangeClickEvent = volIconBox.addEventListener("click", () => {
  let icon1 = '<img src="volumeup.svg" style="width:5vw;"></img>';
  let icon2 = '<img src="volumedown.svg" style="width:5vw;"></img>';
  if (volumeIconStatus == 1) {
    //zmien na ikone wylaczona
    volumeIconStatus = 0;
    volIconBox.innerHTML = icon2;
  } else {
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
    pauseStopHook.innerHTML = icon3;
  } else {
    pauseStopIcon = 1;
    pauseStopHook.innerHTML = icon4;
  }
});

// Get the volume slider
const volumeSlider = document.getElementById("volumeSlider");

// Function to handle volume change
function handleVolumeChange() {
  // Retrieve the current value
  const currentVolume = volumeSlider.value;
  volumeValueBox.innerHTML = currentVolume;
  return currentVolume;
}


// Attach the event listener to the volume slider
volumeSlider.addEventListener("input", () => {
  let currentVolume = handleVolumeChange();
  volumeSet(currentVolume);
});

async function volumeSet(currentVolume) 
{
  let x = await fetch("http://localhost/radio/php_commands/setvolume.php?volume="+currentVolume);
  let y = await x.text();
  console.log("volume set for:"+y);
}