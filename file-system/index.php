<?php
    print_r(scandir("../"));
    /**
        print_r(scandir("../", SCANDIR_SORT_DESCENDING));
        print_r(scandir("../", SCANDIR_SORT_NONE));
        print_r(scandir("../", SCANDIR_SORT_ASCENDING));
    */

    // scandir() function will return array of files and directories in the specified path
    // is_file()
    // is_dir()
    // is_link()
    echo is_link("../index.php") ? "Yes" : "No";
    // what means symbolic link?
    // symbolic link is a file that points to another file or directory

    // create new folder
     mkdir("new-folder");

     // create new file
    touch("new-file.txt");

    // rename file
    rename("new-file.txt", "new-file-renamed.txt");

    // delete file
    unlink("new-file-renamed.txt");

    // delete folder
    rmdir("new-folder");

    // copy file
    copy("file.txt", "file-copy.txt");

    // copy folder
    copy("folder", "folder-copy");

    // move file
    rename("file-copy.txt", "folder-copy/file-copy.txt");

    // move folder
    rename("folder-copy", "folder-copy-moved");

    // get file size
    echo filesize("file.txt");

    // get file type
    echo filetype("file.txt");

    // get file last access time
    echo fileatime("file.txt");

    // get file last modification time
    echo filemtime("file.txt");

    // get file last change time
    echo filectime("file.txt");

    // get file owner
    echo fileowner("file.txt");

    // get file group
    echo filegroup("file.txt");

    // get file permissions
    echo fileperms("file.txt");

    // get file inode
    echo fileinode("file.txt");
    // what means inode?
    // inode is a data structure that stores information about a file or folder