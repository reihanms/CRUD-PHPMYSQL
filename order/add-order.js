var add = document.getElementById("GFG_DOWN");
var init = document.getElementById('barang');
var options = init.innerHTML;
           
var br = document.createElement("br");
function GFG_Fun() {

    var BRG = document.createElement("select");
    BRG.setAttribute("class", "form-control");
    BRG.setAttribute("name", "kode_barang[]");
    BRG.innerHTML = options;
    
    var QTY = document.createElement("input");
    QTY.setAttribute("type", "text");
    QTY.setAttribute("name", "quantity[]");
    QTY.setAttribute("class", "form-control");
    QTY.setAttribute("placeholder", "quantity");
                    
    add.appendChild(BRG);
            
    add.appendChild(br.cloneNode());
            
    add.appendChild(QTY);
    add.appendChild(br.cloneNode());
}
