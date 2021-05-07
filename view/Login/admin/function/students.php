<?php 
	// viết các hàm tương tác với students (liệt kê, thêm sửa ,xóa)
	// LẤY THÔNG TIN HỌC VIÊN
	function getStudents()
	{
		global $conn;
		$result= array();
		$sql="SELECT students.facultys_id,students.id,students.name,students.phone,students.email,students.status,students.created_at,facultys.title FROM students,facultys WHERE students.facultys_id=facultys.id";
		$query = mysqli_query($conn,$sql);
		while ($row =mysqli_fetch_assoc($query)) {
			$result[]= $row;
		}
		return $result ;
	}

	//lấy thông tin học viên theo id

		function getStudensID($id){
		global $conn;
		$result = array();

		$sql = "SELECT *FROM students WHERE id = $id";
		$query = mysqli_query($conn, $sql);
		while ($row = mysqli_fetch_assoc($query)) {
			$result = $row;
		}
		return $result;
	}

	//lấy ra thông tin khoa
	function getFacultys(){
		global $conn;
		$result= array();
		$sql="SELECT * FROM facultys";
		$query = mysqli_query($conn,$sql);
		while ($row =mysqli_fetch_assoc($query)) {
			$result[]= $row;
		}
		return $result;
	}

	// check selected khoa
		function getFaculty($id,$faculty_id){
			if ($id==$faculty_id) {
				echo "selected";
			}
	}

	// update students

	function updateStudents($id,$faculty_id,$name,$phone,$addres,$status){
		global $conn;
		$sql = "UPDATE students SET facultys_id = $faculty_id,name = '$name',phone='$phone',addres='$addres',status=$status WHERE id= $id";
		 return $query = mysqli_query($conn,$sql);
	}


	// Search students

	function Search($phone){
		global $conn;
		$result= array();
		$sql="SELECT students.id,students.name,students.phone,students.email,students.status,students.created_at,facultys.title FROM students,facultys WHERE students.facultys_id=facultys.id AND phone LIKE  '%$phone%'";
		$query = mysqli_query($conn,$sql);
		while ($row =mysqli_fetch_assoc($query)) {
			$result[]= $row;
		}
		return $result;
	}

 ?>