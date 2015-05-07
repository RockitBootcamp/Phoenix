Objectives
------
* Demonstrate creating SSH Keys
* Explain the difference between public and private keys



What is SSH
-------

SSH is essentially using a network connection to get into Terminal on another computer.

* Uses Public/Private Keys
* Runs over port 22
* Secure Shell works very similarly to Secure Sockets Layer web transactions
* Exchanges
	* First, the client and the server exchange (public) host keys. If the client machine has never encountered a given public key before, both ssh and most web browsers ask the user whether to accept the untrusted key
* ssh is actually a suite of tools:
	* **sshd** dæmon that acts as a server to all other commands
	* **ssh** primary end-user tool: remote shell, remote command, and port-forwarding sessions
	* **scp** tool for automated file transfers
	* **sftp** tool for interactive file transfers—COMMERCIAL SSH ONLY
	* **ssh-keygen** generates private-public key pairs for use in RSA and DSA authentication (including host keys)
	* **ssh-agent** dæmon used to automate client's RSA/DSA authentications
	* **ssh-add** loads private keys into ssh-agent process
	* **ssh-askpass** X interface for ssh-add


Exercise Setup Keys with Github
-------
https://help.github.com/articles/generating-ssh-keys/


Public/Private Keys
----------------


Create a key

1. Check if you have ssh installed and ports are open

	```
	which ssh
	nmap
	```
	
1. Create a new Key pair
	


	````
	ssh-keygen -t rsa -C "your_email@example.com"
	````
	
2. Set Permissions
		
	````
	chmod 700 ~/.ssh && chmod 600 ~/.ssh/*
	````
	
3. Place public key on Server

	```
	cat ~/.ssh/id_rsa.pub | ssh root@example.com 'cat - >> ~/.ssh/authorized_keys'
	```
	
Authorizing Access
* Add the public key to the systems authorized keys
	
	````
	cd ~/.ssh
	cp id_rsa.pub authorized_keys
	
	or 
	
	cat ~/.ssh/id_rsa.pub | ssh root@example.com 'cat - >> ~/.ssh/authorized_keys'
	````
	

References
----
* [SSH What and How](http://code.tutsplus.com/tutorials/ssh-what-and-how--net-25138)
* [Linux Journal Intro to SSH](http://www.linuxjournal.com/article/4412?page=0,0)
* [Getting Started with SSH](https://kimmo.suominen.com/docs/ssh/)
* [GitHub Generating SSH keys](https://help.github.com/articles/generating-ssh-keys/)
