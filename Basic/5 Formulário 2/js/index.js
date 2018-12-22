/**
* Notes:
Co bych chtel aby fungovalo:
- pridavani a mazani adres
- oznacovani adres tim 'ucetni'/'dodaci'/'dorucovaci'/'zasilaci' - vyzkouset. Pozor, jedno oznaceni muze byt pouze na jedne adrese
- Mozna by se ty adresy dali pridavat pres modal? Nevim - to nejak proste promysli, to uz je to UX :)
- U adres i u kontaktu je potreba mit editovatelny vsechny ty pole, co jsou ted k dispozici i pres to naklikani skrz menu s ozubenym koleckem. Ale jsou to casto, pole, ktery se moc nepouzivaji. Takze promyslet, jestli se treba nekde neskryt. Nebo takhle naklikavat jako to ted funguhe? Nebo to nebude na velke strance potreba? Nevim. Kdyztak se podivej treba jeste na fakturu, jak tam nejaky dodatecny informace skryvame. Tohle taky potreba promyslet a vyzkouset.
- Jo a toho submenu na tlacitku 'Pridat adresu' bych se zbavil. Bude proste jen 'Pridat adresu' a teprve az adresa bude, tak si klient naklika, jako co ji chce oznacit.
*/
(function(){
  $(document).foundation();
  var counter = 0;
  // Přidání adresy
  $(document).on("click", "#addAddress", function(e) {
    e.preventDefault();
    counter++;
    var address = $(".accordion--address-default").clone(true).toggleClass("accordion--address-default").toggleClass("accordion--address");
    address.attr("data-id", counter);
    $(".row--address").append(address);
  });
  // Odebrání adresy
  $(document).on("click", "#removeAddress", function(e) {
    e.preventDefault();
    $(this).parents(".accordion--address").remove();
  });
  // Adding data
  $(document).on("click", "#addDataModal label", function(e) {
    var checkbox = $("#"+$(this).attr("for")+""),
        checkboxData = checkbox.data("show"),
        checkboxId = "#data-" + checkboxData + "";
    $(checkboxId).toggleClass("hide");
  });
})();