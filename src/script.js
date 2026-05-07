const armBtn = document.getElementById("arm-btn");
const disarmBtn = document.getElementById("disarm-btn");

const alarmStatus = document.getElementById("alarm-status");
const logList = document.getElementById("log-list");

armBtn.addEventListener("click", () => {

    alarmStatus.textContent = "ARMADO";

    addLog("Alarme armado");

});

disarmBtn.addEventListener("click", () => {

    alarmStatus.textContent = "DESARAMADO";

    addLog("Alarme desarmado");

});

function addLog(message) {

    const li = document.createElement("li");

    li.textContent = message;

    logList.prepend(li);

}