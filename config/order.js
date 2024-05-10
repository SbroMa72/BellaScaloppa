// Funzione per inviare l'ordine al server
function inviaOrdine(codPiatto, nomeCliente, nomePiatto, prezzo) {
    $.ajax({
        type: "POST",
        url: "../config/gestisci_ordine.php",
        data: { codPiatto: codPiatto, nomeCliente: nomeCliente, nomePiatto: nomePiatto, prezzo: prezzo },
        success: function (response) {
            alert(response); // Mostra un messaggio di successo
            // Dopo aver inviato l'ordine con successo, aggiorna il carrello
            aggiornaCarrello();
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText); // Mostra eventuali errori nella console
        }
    });
}

// Funzione per recuperare gli ordini dal server e aggiornare il carrello
function aggiornaCarrello() {
    $.ajax({
        type: "GET",
        url: "../config/recupera_ordini.php",
        success: function (response) {
            // Aggiorna il carrello sulla pagina con gli ordini recuperati
            // (es. aggiungi gli ordini a una tabella o a una lista)
            console.log(response);
            // Esempio: aggiorna la tabella dei carrello con gli ordini recuperati
            aggiornaTabellaCarrello(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText); // Mostra eventuali errori nella console
        }
    });
}

// Funzione per aggiornare la tabella del carrello con gli ordini recuperati
function aggiornaTabellaCarrello(ordini) {
    // Cancella il contenuto attuale della tabella
    $("#tabella-carrello tbody").empty();

    // Aggiungi gli ordini recuperati alla tabella
    ordini.forEach(function (ordine) {
        var riga = "<tr><td>" + ordine.nomePiatto + "</td><td>" + ordine.prezzo + "</td></tr>";
        $("#tabella-carrello tbody").append(riga);
    });
}

// Esempio di utilizzo: invia un ordine quando l'utente fa clic su un pulsante "Ordina"
$(document).on("click", ".btn-outline", function () {
    var codPiatto = $(this).closest("form").find("input[name='codPiatto']").val();
    var nomeCliente = "Nome Cliente"; // Esempio, sostituisci con il nome del cliente reale
    var nomePiatto = $(this).closest("tr").find("td:eq(1)").text(); // Nome del piatto
    var prezzo = $(this).closest("tr").find("td:eq(3)").text(); // Prezzo del piatto
    inviaOrdine(codPiatto, nomeCliente, nomePiatto, prezzo);
});

// Esempio di utilizzo: aggiorna il carrello quando la pagina si carica
$(document).ready(function () {
    aggiornaCarrello();
});
