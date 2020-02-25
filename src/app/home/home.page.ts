import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
url_const : string;
  constructor() {
    this.url_const = "https://www.ole.com.ar/";
  }

    copiarUrl() {
    var aux = document.createElement("input");
    aux.setAttribute("value",this.url_const);
    document.body.appendChild(aux);
    aux.select();
    document.execCommand("copy");
    document.body.removeChild(aux);
    }



}
