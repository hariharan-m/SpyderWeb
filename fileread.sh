#!/usr/bin/bash
filename="$1"
while read -r line
do
    name="$line"
    php $line data.json
done < "$filename"
