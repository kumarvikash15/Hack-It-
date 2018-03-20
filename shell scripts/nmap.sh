args=("$@")
echo "" > resultnmap.txt
echo "Checking if the vitim has services open"
nmap -sS ${args[0]} | grep 445 >> resultnmap.txt
nmap -sS ${args[0]} | grep 139 >> resultnmap.txt
result=$(cat resultnmap.txt | grep 445)
echo " "
echo " "
if [ "$result" = "" ] 
then
    echo "System has No SMBservice running"
    echo "---------------------EXITING-------------------"
else
    echo "System might be vulnerable proceeding futher"
    echo " "
    echo "--------------------Checking for vulnerable servers-----------------"
   
    ./nmap-vulncheck.sh ${args[0]}
fi