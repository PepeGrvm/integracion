var interfaceConfig = {
    TOOLBAR_BUTTONS: [
        'microphone',
        'camera',
        'closedcaptions',
        'desktop',
        'fullscreen',
        'fodeviceselection',
        'hangup',                //SAlir
        'profile',
        // 'info',               //ver el link
        'chat',
        'recording',             //grabar
        'livestreaming',      //admin lo puede hacer
        'etherpad',
        // 'sharedvideo',        //admin lo puede hacer
        'settings',
        'raisehand',              //manito
        'videoquality',           //calidad de video
        'filmstrip',
        'invite',
        'feedback',
        'stats',
        'shortcuts',
        'tileview',
        'videobackgroundblur',
        'download',
        'help',
        'mute-everyone',    //administrador
        'e2ee'
    ],
    SETTINGS_SECTIONS: [
        'devices',
        'language',
        'moderator',
        'profile',
        'calendar'
    ],
    SHOW_CHROME_EXTENSION_BANNER: false
};

const domain = 'meet.jit.si';

const options = {
    roomName: getStoredRoomName() || '', // Try to get room name from storage
    width: '100%',
    height: 500,
    parentNode: document.querySelector('#meet'),
    userInfo: {
        email: "admin@gmail.com",
        displayName: "PROFESOR CLASES YA",
    },
    noSsl: true,
    interfaceConfigOverwrite: interfaceConfig,
};

function getStoredRoomName() {
    return localStorage.getItem('storedRoomName');
}

function setStoredRoomName(roomName) {
    localStorage.setItem('storedRoomName', roomName);
}

function redirigir() {
    let identificador = document.getElementById("inputIngresoClase").value;

    console.log(identificador);

    if (identificador.trim() !== '') {
        options.roomName = identificador;
        setStoredRoomName(identificador); // Store room name
        console.log(options.roomName);
        window.location.href = 'clase-profesor';
    } else {
        alert("Please enter a room name.");
    }
}

const api = new JitsiMeetExternalAPI(domain, options);
