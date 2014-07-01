#!/bin/sh
while true; do
	(
		echo;
		date;
		zenity --entry --title="Olá piloto" --text="Qual seu nome?" --width="400" --height="300"
	) >> pilotos.log &&
	sleep 5m &&
	zenity --warning --title="Tempo esgotado" --text="Por favor, promova seu co-piloto e retorne para a platéia." --width="400" --height="300"
done
