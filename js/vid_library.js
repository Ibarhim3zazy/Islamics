let closeVid = [];
closeVid[0] = "test";
function playVid(id) {
  let arr = id.split('');
  let idDiv = "played_div" + arr[arr.length - 1];
  closeVid[1] = idDiv;
  if (closeVid[0] !== closeVid[1]) {
    console.log(closeVid[0] + " none");
    if (document.getElementById(closeVid[0])) {
      document.getElementById(closeVid[0]).style.cssText += 'grid-column: span 1;width:300px;height: 300px;margin: 30px;background-color: #99f;border-radius: 20px;order: unset;';
      let arr = closeVid[0].split('');
      let idVid = "played_vid" + arr[arr.length - 1];
      console.log(idVid + " Stop");
      document.getElementById(idVid).pause();
      document.getElementById(idVid).currentTime = 0;
      closeVid[0] = closeVid[1];
    }else {
      closeVid[0] = closeVid[1];
    }
  }
  document.getElementById(idDiv).style.cssText += 'grid-column: span 3;order: -1;margin: auto;margin-bottom: 40px;width: 650px;height: 350px;transition: 1s;background-color: #9f9;';
  window.location = "#top";
  let vidArrplay = idDiv.split('');
  let idVidplay = "played_vid" + vidArrplay[vidArrplay.length - 1];
  if (!!document.getElementById(idVidplay).play()) {
    console.log(idVidplay + " Play");
    document.getElementById(idVidplay).play();
  }
}
