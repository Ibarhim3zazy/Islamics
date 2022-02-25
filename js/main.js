function play_vid() {
  let video = document.getElementById('play_vid');
  document.getElementById('autoplay').setAttribute('src', 'media/proj_intro.mp4');
  video.load();
  setTimeout(function () {
    document.getElementById('unMute').style.display = "none";
    document.getElementById('skip').style.display = "none";
  }, 18000);
}
function unMute() {
  let video = document.getElementById('play_vid');
  video.muted = !video.muted;
  document.getElementById('unMute').style.display = "none";
}
function skip() {
  document.getElementById('play_vid').style.transform = "translate(-70%, -50%)";
  document.getElementById('unMute').style.transform = "translate(-125%, -50%)";
  document.getElementById('skip').style.transform = "translateX(-170%)";
  document.getElementsByClassName('header')[0].style.top = "0%";
  document.getElementById('play_vid').style.animationName = "none";
  document.getElementById('skip').style.animationName = "none";
  document.getElementsByClassName('header')[0].style.animationName = "none";
  document.getElementById('skip').style.display = "none";
}
