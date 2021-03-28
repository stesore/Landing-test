# Landing page test
## Author: Stefano Soresina 

Landing page di test creata da zero con obiettivo di ricreare la landing online responsive che si trova qui:
[PrestitiFaiDaTe] https://www.prestitifaidate.it/

Sviluppata utilizzando:
- Bootstrap
- jQuery 
- PHP
- SCSS

La validazione dei campi lato client è effettuata sia tramite browser via html5 sia tramite JQuery, mentre lato server viene effettuata via PHP.

L'invio dei campi avviene tramite AJAX.
 
### Differenze rispetto all'online

La principali differenze tra la mia landing e quella online sono principalmente:
- la gestione campi e della validazione dei form: p.e. non ho usato (volutamente) un datepicker nel campo 'data assunzione', ma un campo text con placeholder che diventa date al focus

- la mancanza dei carousel di owl carousel, che non sono riuscito a far funzionare, nelle sezioni vantaggi e testimonials.

### Dettagli

Ho gestito i campi dei dati tramite un file JSON in cui sono riassunti tutti i campi con i possibili valory, il tipo, i vari attributi html da aggiungere (pattern, required etc); il file JSON sarebbe l' ipotetico risultato di un salvataggio da backend delle impsotazioni del form.

In pratica l'ho pensata come se, in un futuro sviluppo, si potesse svillare un backend per facilmente creare o modificare form a piacimento; il JSON simula il salvataggio delle opzioni a database.

Il render html dei form avviene tramite PHP.

### Ambiente di test

Per sviluppare la landing ho utilizzato l'ambiente di test fornito, su Windows 10, usando Microsoft Visual Studio Code come IDE.
Per questo motivo ho aggiunto 2 script al file package.json, rispettivamente watchwin e productionwin per fan funzionare l'assegnazione della variabile di sistema di Node JS NODE_ENV anche su Windows, in quanto su Powershell la sintassi Linux dava errore.

### Possibili migliorie

Tra le possibili migliorie che farei:
- rendere funzionante owl carousel per le sezioni vantaggi e testimonials.
- refactoring del codice, in particolare del CSS, usando meglio SCSS e relative carattestiche (funzioni, mixin, variabili etc) 


### TO-DO LIST pre-produzione

In un caso reale, prima di metterlo in produzioni effettuerei queste operazioni:

- Spostamento del file log di PHP fuori dalla directory radice del sito, e quindi non visibile online
- Spostamento del file JSON "multistep-form-data.json" fuori dalla directory radice del sito, e quindi non visibile online

