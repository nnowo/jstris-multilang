<?php

return [
    //On screen captions
    'ready' => 'PRONTI',
    'go' => 'VIA!',
    'notFocused' => 'Fuori focus', //max 13 characters
    'clickToFocus' => 'Clicca per riprendere il focus', //max 30 characters
    'specMode' => 'Modalità spettatore',
    'specModeInfo' => 'Sei in modalità spettatore.',
    'endSpec' => 'Scrivi /play per iniziare a giocare', //keep '/play'
    'typeHelp' => 'Scrivi /help per la lista dei comandi.', //keep '/help'
    'st' => '°', //max 2, in 1st, can stay untranslated
    'nd' => '°', //max 2, in 2nd, can stay untranslated
    'rd' => '°', //max 2, in 3rd, can stay untranslated
    'th' => '°', //max 2, in 4th, can stay untranslated
    'notPlaying' => 'Non gioca', //max 12
    'waitNext' => 'Aspetta la fine del round',
    'waitNext2' => 'Aspetta l\'inizio del prossimo round',
    'pressStart' => 'Premi \'Nuova partita\' per iniziare', //'New game' should be same as in game.newGame

    //Chat
    'warning' => 'Attenzione',
    'inactive1' => 'La modalità spettatore verrà attivata. Scrivi in chat per annullare.',
    'inactive2' => 'Rilevata inattività. Al prossimo round inattivo verrà attivata la modalità spettatore.',
    'nickFill' => 'Scrivi il tuo nome utente per parlare.',
    'setButton' => 'Set', //max 4
    'sendButton' => 'Send', //max 4
    'rNameReq' => 'Il nome della stanza deve essere specificato.',
    'newsUser' => 'Novità', //special username in chat
    'serverUser' => 'Server', //special username in chat
    'noNamed' => 'NoName', //user wihtout name (guest), max 7, can stay untranslated
    'watching' => 'Stai osservando', //in 'Watching: user1,user2..', altern.=Spectators
    'userJoined'=>'è entrato nella stanza', //in 'User1 joined the room.'
    'joined' => 'è entrato', //in title: 'User1 joined!'
    'userCame' => 'è entrato per osservare',  //in 'User1 came to watch.'
    'isSpectating' => 'sta osservando', //in 'User1 is now spectating.'
    'spectator' => 'Spettatore',
    'hasLeft' => 'è uscito', //in 'Spectator User1 has left.'
    'signedAs' => 'Sei autenticato come',
    'welcome' => 'Benvenuto,', //in 'Welcome User1!'
    'welcomeIn' => 'Benvenuto in', //in 'Welcome in RoomName.'
    'noSpectators' => 'Non ci sono spettatori.',
    'replayAvailable' => 'Replay disponibile qui:',
    'oldVer' => 'Stai usando una versione vecchia, premi CTRL+F5 per caricare la nuova versione.',
    'privateRoom' => 'Questa è una stanza privata, non verrai disturbato mentre stai giocando. Vai nella Lobby per vedere le stanze pubbliche.',
    'restartInfo' =>  'Ricomincia premendo F4 o un tasto personalizzato.',
    'joinLinkInfo' => 'Questa stanza è privata. Può entrare solo chi ha questo link:',

    //Dynamic elements
    'received' => 'Ricevute', //max 15
    'finesse' => 'Finesse',   //max 15

    //List of rooms
    'roomName' => 'Nome stanza',
    'games' => 'Round', //number of games played in a room
    'players' => 'Giocatori', //number of players

    //Results
    'name' => 'Nome',
    'wins' => 'Vinte',
    'time' => 'Tempo', //as game duration
    'received' => 'Ricevute',
    'sent' => 'Mandate',
    'blocks' => 'Pezzi', //as number of blocks placed
    'ren' => 'REN',

    //Practice mode result
    'gameTime' => 'Tempo', //in Sprint time: xx.xx
    'see' => 'See', //in 'See 40L leaderboard'
    'leaderboard' => 'leaderboard',

    //Less common strings, can stay untranslated
    'warning2' => 'ATTENZIONE',
    'connected' => 'Connesso',
    'client' => 'client',
    'notConnected' => 'NON CONNESSO',
    'connLost' => 'Connessione persa!',
    'lastGame' => 'Ultimo round:',
    'roomSettings' => 'Impostazioni stanza:',
    'attack' => 'Attacco',
    'combo' => 'Combo',
    'solid' => 'Solid',
    'clear' => 'Clear',
    'mode' => 'Mode',
    'garbage' => 'Garbage',
    'garbageDelay' => 'GarbageDelay',
    'messiness' => 'Messiness',
    'replay' => 'Replay',
    'rep' => 'Rep', //max 3, short for Replay
    'rec' => 'Rec.', //max 4, short for Received
    'enterNullDAS' => 'Imposta il valore numerico del DAS, usando la scala di Nullpomino:',
    'suggestedIs' => 'Il DAS suggerito è',
    'applyConfirm' => 'Conferma?',
    'invalidDAS' => 'Il valore del DAS non era valido. Non è stato modificato',
    'settingsChanged' => 'Le impostazioni sono state modificate durante il gioco. Il replay non è più valido.',
    'segment' => 'Segmento',
    'duration' => 'Durata',
];
'slowDown' => 'RALLENTA',
'speedLimitIs' => 'Il limite di velocità è',
'connecting' => 'Connessione...',
'signingIn' => 'Signing in',
'loginFail' => 'Log in failed!',
'loginFail2' => 'Not logged in! You\'re playing as a guest called {name}.',
'mapLoading' => 'Map loading...',
'oldVer2' => 'You still have the old version! Use {key} to reload your client',
'roomFull' => 'Sembra che questa stanza sia piena.',
'lobbyInfo' => 'Questa chat è condivisa con {discord}.',
'newHost' => 'You are now the host of this room.',
'badRoom' => 'Questa stanza non esiste più, joining the Default room!',
'stngsChanged' => 'Setting changed by the host',
'stngsCustom' => 'Impostazioni personalizzate',
'aSpec' => 'Sei già spettatore!',
'aPlay' => 'Stai già giocando!',
'repFail' => 'Il replay non è potuto essere salvato',
'repInChat' => 'Replay file dumped into the chat. Per preservarlo, copy the text in the box and paste into your favourite text editor.',
'repTxtInfo' => 'The copied replayfile can be then played in the replayer or possibly resubmitted to the site.',
'newPB' => 'YOUR NEW PERSONAL BEST',
'firstPB' => 'This was your first game. Get another PB to track the improvement.',
'infoPB' => 'Il tuo record precedente era {prevPB} realizzato {prevAgo}. Il miglioramento è di {PBdiff}.',
'daysAgo' => 'giorni fa',
'raceFin' => 'LA GARA È FINITA',
'raceFinInfo' => 'You can complete the run, but the next round can start at any time.',
'notTSD' => 'NOT TSD',
'notTSDInfo' => 'Only T-Spin Double is allowed',
'notPC' => 'NOT a PC',
'notPCInfo' => 'Do a Perfect Clear every 10 blocks. Your board is not clearable.',
'fwDetect' => 'FOUR WIDE',
'fwDetectInfo' => 'Ti stai attaccando da solo!',
'oops' => 'Oops!',
'chatNA' => 'Public chatting is not available for guests or users with less than {chReq} hours of gametime.',
'leMore' => 'Learn more',
'connLimit' => 'The maximum amount of open connections for this IP is curently reached. If you need increased limits, contact us via Discord',
'idleDC' => 'Disconnesso per inattività! La sezione spettatori era piena.',
'RLreach' => 'Rate limit reached.',
'ban1' => 'Your access to the Live games has been permanently restricted. You can still play singleplayer modes.',
'ban2' => 'This user account is BANNED. Relogin to the website for more information.',
'ncGS' => 'Not connected to the game server, try {refr}.',
'refr' => 'refreshing the page',
'nsUnpub' => 'Record not saved, the map is not published.',
'nsTspins' => 'Record not saved, not enough T-Spins.',
'nsLowPC' => 'Record not saved, at least 2 Perfect Clears needed.',
'noBlocks' => 'Out of blocks',
'noBlocks2' => 'Tutti i pezzi sono stati usati',
'noPlayers' => 'No players',
'cntMore' => '{cnt} more',
'cntGuests' => '{cnt} guests',
'cntSpec' => '{cnt} spectating',
'joinPossible' => 'Join possible',
'notEligible' => 'Not eligible',
'gTimeShort' => 'G.time',
'on' => 'On',
'off' => 'Off',
'fr' => 'Amici',
'frLoad' => 'Caricando la lista degli amici',
'frLogin' => 'Accedi prima di usare la lista amici',
'frEmpty' => 'La tua lista amici è vuota',
'frHowAdd' => 'Visita il profilo di user\ per mandargli una richiesta di amicizia.',
'frPriv' => 'Private',
'frIn' => 'Already in!',
'frChat' => 'Apri la chat',
'frRel' => 'Reload',
'frMsgTo' => 'Message to {name}',
'frInv' => 'Send room invite',
'frInvTo' => 'Invita su {room}',
'frInvIn' => 'You are already in!',
'frInvBy' => 'da {user}',
'frOn' => 'ONLINE',
'frOff' => 'OFFLINE',
'frNewChatH' => 'Questo è l’inizio della tua chat con {name}.',
'frWelc' => 'Welcome to the Friends tab',
'frIntro' => 'In questa area, puoi accedere ad una lista di amici amici online, chat private, ed inviti',
'frIntro2' => 'Per inviare una richiesta di amicizia, visita il profile di un user\'s ',
'frIntro3' => 'To manage friends, visit the {frPage}',
'frPage' => 'Pagina amici',
'frIntroCl' => 'Close intro',
