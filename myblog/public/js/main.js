(function () {
  'use strict';
  var cmds = document.getElementsByClassName('del');

  for (let index = 0; index < cmds.length; index++) {
    var cmd = cmds[index];
    cmd.addEventListener('click', function (e) {
      e.preventDefault();
      if (confirm('are you sure?')) {
        document.getElementById('form_' + this.dataset.id).submit();
      }
    });
  }


})();
