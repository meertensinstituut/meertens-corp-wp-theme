let showSubnavStatus = false;


window.onload = function() {

  var anchors = document.getElementsByClassName('mShowSubNav');
  for(var i = 0; i < anchors.length; i++) {
      var anchor = anchors[i];
      anchor.onclick = function() {
          showSubnav(anchor);
      }
    }
}



function showSubnav(anchor) {
  let subnavContent = anchor.parentElement.getElementsByTagName('ul')[0].outerHTML;

    document.getElementById('subnavInner').innerHTML = subnavContent;
    document.getElementById('subnav').style.display = 'flex';

    //document.getElementById('subnav').style.display = 'none';

}

function hideSubnav() {
    document.getElementById('subnav').style.display = 'none';
}
