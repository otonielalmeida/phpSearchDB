const search_bar = document.querySelector("#search_bar");
const search_text = document.querySelector(".text_search");
search_bar.addEventListener("keypress", function (e) {
  let el = e.target.value;

  function searchDB(query) {
    fetch(`http://localhost/search_bar_exercise/search.php?search=${query}`, {
      method: "GET",
      dataType: "json",
    })
      .then((response) => response.json())
      .then((data) => loadData(data));
  }

  search_text.innerHTML = "";
  searchDB(el);
});

function loadData(data) {
  for (var i = 0; i < data.length; i++) {
    var title = data[i].title;
    var id = data[i].id;

    var h4 = document.createElement("h4");
    var a = document.createElement("a");
    h4.innerHTML = title;
    a.setAttribute("href", `individualPage.php?id=${id}`);
    a.appendChild(h4);
    search_text.appendChild(a);

    if (data[i].text != undefined) {
      var text = data[i].text;
      var h6 = document.createElement("h6");
      h6.innerHTML = text;
      search_text.appendChild(h6);
    }
  }
}
