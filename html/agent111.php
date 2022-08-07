<html>

        <body>
                                <table >
                                        <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        require_once 'Connection.php';
                                        $a=1;
                                        $i=$_GET['Type'];
                                        $sql = "SELECT * FROM agent where Type='$i'";
                                        $result = $conn->query($sql);
                                              {
                                                    while ($data = mysqli_fetch_array($result)) 
                                                      {
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $a; ?></td>
                                                                    <td><?php echo $data['Name'];?></td>
                                                                    <td><?php echo $data['Address'];?></td>
                                                                    <td><?php echo $data['Contact'];?></td>
                                                                    </td>
                                                                </tr>
                                                                    <?php
                                                                    $a++;
                                                                }
                                                            }
                                               ?>
                                        </tbody>
                                    </table>
</html>
