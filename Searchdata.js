function init() {
      var lookfor = document.getElementById("q").value;
      var words = document.body.innerHTML.split(" ");
      for (var i = 0; i < words.length; i++) {
        if (lookfor == words[i]) {
          words[i] = '<span class="highlight">' + words[i] + '</span>';
        }
      }
      document.body.innerHTML = words.join(" ");
    }
  
