#!/bin/sh
while true; do
	name="$(zenity --entry --title=\"Welcome pilot\" --text=\"What is your name?\" --width=\"400\" --height=\"300\")"; 
	email="$(zenity --entry --title=\"Welcome pilot\" --text=\"What is your email?\" --width=\"400\" --height=\"300\")"; 
	(
		echo; 
		date; 
		echo -n $name" <"$email">"
	) >> pilots.log &&
	sleep 5m &&
	zenity --warning --title="Time is up" --text="Please promote your co-pilot and return to the audience." --width="400" --height="300"
done
