#!/bin/sh
while true; do
	inotifywait -r ./ -e create,modify,delete &&
	clear &&
	phpunit --configuration phpunit.xml &&
    (
        if [ "$(git status --porcelain)" ]; then
            git add -u . &&
            git commit -m "`
                zenity --entry --title="Parabéns piloto" --text="Qual o título deste commit?" --width="400" --height="300" &&
                (
                    echo &&
                    echo -n @ &&
                    tail -1 pilotos.log
                ) ||
                sleep 10s
            `"
        fi
    )
done
