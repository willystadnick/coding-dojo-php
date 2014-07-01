#!/bin/sh
while true; do
	(
		echo;
		date;
		zenity --entry --title="Welcome pilot" --text="What is your name?" --width="400" --height="300"
	) >> pilots.log &&
	sleep 5m &&
	zenity --warning --title="Time is up" --text="Please promote your co-pilot and return to the audience." --width="400" --height="300"
done
