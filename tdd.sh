#!/bin/sh
while true; do
	touch pilots.log
	inotifywait -r ./ -e create,modify,delete &&
	clear &&
	phpunit --configuration phpunit.xml &&
    (
        if [ "$(git status --porcelain)" ]; then
            git add -A . &&
            git commit -m "`
                zenity --entry --title="Congratulations pilot" --text="What is the title of this commit?" --width="400" --height="300" &&
                (
                    echo &&
                    echo -n @ &&
                    tail -1 pilots.log
                ) ||
                sleep 15s
            `"
        fi
    )
done
