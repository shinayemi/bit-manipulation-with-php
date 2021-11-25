# bit_manipulation_with_php (SOLUTION)

# Problem

<div class="ps-content-wrapper-v0">
<p>Given an integer, convert its binary representation to zero by using the following operations:</p>

<ol>
	<li>
	<p>Change the <em>i<sup>th</sup></em> binary digit only if <em>(i+1)<sup>th</sup></em> binary digit is 1 and all other binary digits from <em>(i+2) </em>to the end are zeros.</p>
	</li>
	<li>
	<p>Change the rightmost digit without restriction.</p>
	</li>
</ol>

<p>What is the minimum number of operations required to complete this task?</p>

<p>&nbsp;</p>

<p>For example, let's say the given number is <em>n = 8</em>, which has a binary representation of 1000. For this number, 15 operations are required to convert it to 0 according to the above constraints. This can be seen in the following way:</p>

<pre>1000→1001→1011→1010→1110→1111→1101→1100→0100→0101→0111→0110→0010→0011→0001→0000</pre>

<p>&nbsp;</p>

<p><em>Note: In the binary representation of a number, the binary digit's positions are numbered as 0 to x-1 from left to right, where x is the number of digits in the binary representation of the number.</em></p>

<p>&nbsp;</p>

<p class="section-title">Function Description</p>

<p>Complete the function <em>minOperations</em> in the editor below.</p>

<p>&nbsp;</p>

<p>minOperations has the following parameter:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;long <em>n:</em>&nbsp; the starting value in base 10</p>

<p>Returns:</p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;int: the minimum number of operations required to covert <em>n</em> to <em>0</em></p>

<p>&nbsp;</p>

<p class="section-title">Constraints</p>

<ul>
	<li>
	<p>1 ≤ <em>n</em> ≤ 10<sup>15</sup></p>
	</li>
</ul>

<p>&nbsp;</p>
<!-- <StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details><summary class="section-title">Input Format For Custom Testing</summary>

<div class="collapsable-details">
<p>The first line contains a long integer, <em>n.</em></p>
</div>
</details>
<!-- </StartOfInputFormat> DO NOT REMOVE THIS LINE-->

<details open="open"><summary class="section-title">Sample Case 0</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<pre>STDIN&nbsp;&nbsp;&nbsp;&nbsp; Function 
-----&nbsp;&nbsp;&nbsp;&nbsp; --------
13&nbsp;&nbsp;&nbsp;&nbsp;→&nbsp;&nbsp;<i> n</i> = 13 </pre>

<p class="section-title">Sample Output</p>

<pre>9</pre>

<p class="section-title">Explanation</p>

<p>The binary representation of 13 is 1101. This is the sequence of the 9 operations that change 13 to 0 according to the constraints:</p>

<pre>1101→1100→0100→0101→0111→0110→0010→0011→0001→0000</pre>
</div>
</details>

<details><summary class="section-title">Sample Case 1</summary>

<div class="collapsable-details">
<p class="section-title">Sample Input For Custom Testing</p>

<pre>STDIN&nbsp;&nbsp;&nbsp;&nbsp; Function
-----&nbsp;&nbsp;&nbsp;&nbsp; --------
11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;→&nbsp;&nbsp;<i>n</i> = 11</pre>

<p class="section-title">Sample Output</p>

<pre>13</pre>

<p class="section-title">Explanation</p>

<p>The binary representation of 11&nbsp;is 1011. This is the sequence of the 13 operations that change 11 to 0 according to the constraints:</p>

<pre>1011→1010→1110→1111→1101→1100→0100→0101→0111→0110→0010→0011→0001→0000</pre>
</div>
</details>
</div>

