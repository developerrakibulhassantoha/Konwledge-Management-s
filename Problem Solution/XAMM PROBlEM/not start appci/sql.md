1.stop mysql and apache server.
2.copy backup folder.
3.copy database folders from data folder to backup copy folder.
4.delete ibdata1 from backup copy folder.
5.copy ibdata1 from data folder to backup copy folder.
6.delete data folder.
7.rename backup copy folder to data folder.
8.restart the xampp server