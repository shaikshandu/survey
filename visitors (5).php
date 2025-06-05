<section class="table-section">
  <div class="table-container">
    <link rel="stylesheet" href="survey.css">
   <a href="index.html" class="back-icon" title="Back to Home">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="28" height="28">
    <defs>
      <linearGradient id="a" x1="362.18" x2="170.968" y1="99.09" y2="430.28" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#f8ba16"></stop>
        <stop offset="1" stop-color="#e93728"></stop>
      </linearGradient>
    </defs>
    <path fill="url(#a)" d="M242.839,469.839c-2.951,0-5.868-1.044-8.186-3.051L3.095,266.253c-2.742-2.374-4.317-5.822-4.317-9.449s1.575-7.075,4.317-9.449L234.654,46.819c3.7-3.202,8.927-3.953,13.377-1.92,4.451,2.033,7.306,6.477,7.306,11.37v119.292h235.941c6.903,0,12.5,5.597,12.5,12.5v137.487c0,6.903-5.597,12.5-12.5,12.5H255.337v119.291c0,4.894-2.855,9.336-7.306,11.37-1.662,.759-3.433,1.13-5.192,1.13ZM30.372,256.804l199.965,173.174v-104.43c0-6.903,5.597-12.5,12.5-12.5h235.941v-112.487H242.837c-6.903,0-12.5-5.597-12.5-12.5V83.63L30.372,256.804Z"></path>
  </svg>
</a>
 <link rel="stylesheet" href="style121.css">
<section id="members" class="form-section">
  <link rel="stylesheet" href="visitor.css">
  <form action="store_data.php" method="POST">
    <h1>House Ownership Form</h1>
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="text" name="aadhaar" placeholder="Aadhaar Number" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <input type="text" name="address" placeholder="Full Address" required>
    <select name="house_status" required>
      <option value="">Select Ownership</option>
      <option value="Own">Own House</option>
      <option value="Rent">Rent House</option>
    </select>
    <textarea name="notes" placeholder="Additional Notes" rows="4"></textarea>
    <button type="submit">Submit</button>
  </form>
</section>
