let closeVid = [];
closeVid[0] = "test";
function playVid(id) {
  let idDiv =  parseInt(id) + "played_div";
  closeVid[1] = idDiv
  if (closeVid[0] !== closeVid[1]) {
    console.log(closeVid[0] + " none");
    if (document.getElementById(closeVid[0])) {
      document.getElementById(closeVid[0]).style.cssText += 'grid-column: span 1;width:300px;height: 300px;margin: 30px;background-color: #99f;border-radius: 20px;order: unset;';
      let idVid = parseInt(closeVid[0]) + "played_vid";
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
  let vidplay = parseInt(id);
  let idVidplay = vidplay + "played_vid";
  if (!!document.getElementById(idVidplay).play()) {
    console.log(idVidplay + " Play");
    document.getElementById(idVidplay).play();
  }
}
