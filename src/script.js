const armBtn = document.getElementById("arm-btn");
const disarmBtn = document.getElementById("disarm-btn");

const alarmStatus = document.getElementById("alarm-status");
const logList = document.getElementById("log-list");

const lightOnBtn = document.getElementById("light-on-btn");
const lightOffBtn = document.getElementById("light-off-btn");

armBtn.addEventListener("click", async () => {

    await fetch("/api/arm.php");

    alarmStatus.textContent = "ARMADO";

    addLog("Alarme armado");

});

disarmBtn.addEventListener("click", async () => {

    await fetch("/api/disarm.php");

    alarmStatus.textContent = "DESARMADO";

    addLog("Alarme desarmado");

});

lightOnBtn.addEventListener("click", async () => {

    await fetch("/api/light_on.php");

    addLog("Light turned ON");

});

lightOffBtn.addEventListener("click", async () => {

    await fetch("/api/light_off.php");

    addLog("Light turned OFF");

});

function addLog(message) {

    const li = document.createElement("li");

    li.textContent = message;

    logList.prepend(li);

}
