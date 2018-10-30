#!/bin/bash
echo "Entrer une chaine : "
read machaine

i=0
len=${#machaine}

milieu=$(($len/2))

while [ $i -lt $milieu ]
  do
    if [ "${machaine:$i:1}" != "${machaine: -$(($i+1)):1}" ]
      then
      echo "\"$machaine\" n'est pas palindrome"
      exit
    fi
    i=$(($i+1))
done
echo "\"$machaine\" est palindrome"
