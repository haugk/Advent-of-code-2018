<?php

$tt = <<<EOT
Before: [2, 1, 1, 0]
10 1 3 1
After:  [2, 1, 1, 0]

Before: [1, 1, 3, 3]
6 1 0 0
After:  [1, 1, 3, 3]

Before: [2, 1, 2, 2]
14 1 3 0
After:  [0, 1, 2, 2]

Before: [1, 2, 2, 3]
1 0 2 2
After:  [1, 2, 0, 3]

Before: [2, 2, 3, 2]
12 0 2 3
After:  [2, 2, 3, 2]

Before: [1, 1, 0, 1]
13 3 3 2
After:  [1, 1, 0, 1]

Before: [1, 1, 2, 1]
15 3 2 3
After:  [1, 1, 2, 1]

Before: [2, 1, 1, 0]
8 2 1 2
After:  [2, 1, 0, 0]

Before: [1, 1, 1, 2]
8 2 1 3
After:  [1, 1, 1, 0]

Before: [0, 3, 1, 1]
0 0 0 2
After:  [0, 3, 0, 1]

Before: [1, 1, 1, 1]
6 1 0 2
After:  [1, 1, 1, 1]

Before: [3, 1, 2, 0]
10 1 3 1
After:  [3, 1, 2, 0]

Before: [1, 2, 2, 1]
1 0 2 2
After:  [1, 2, 0, 1]

Before: [2, 1, 3, 3]
12 0 2 3
After:  [2, 1, 3, 2]

Before: [0, 1, 1, 3]
7 2 3 1
After:  [0, 0, 1, 3]

Before: [1, 1, 2, 3]
2 1 2 2
After:  [1, 1, 0, 3]

Before: [3, 1, 3, 2]
14 1 3 2
After:  [3, 1, 0, 2]

Before: [1, 1, 1, 0]
6 1 0 2
After:  [1, 1, 1, 0]

Before: [1, 3, 0, 3]
9 0 2 0
After:  [0, 3, 0, 3]

Before: [0, 3, 2, 0]
3 2 1 1
After:  [0, 1, 2, 0]

Before: [3, 1, 2, 0]
2 1 2 3
After:  [3, 1, 2, 0]

Before: [0, 3, 0, 0]
0 0 0 3
After:  [0, 3, 0, 0]

Before: [2, 1, 2, 3]
2 1 2 3
After:  [2, 1, 2, 0]

Before: [1, 1, 3, 1]
6 1 0 2
After:  [1, 1, 1, 1]

Before: [0, 1, 2, 1]
15 3 2 3
After:  [0, 1, 2, 1]

Before: [1, 1, 2, 2]
2 1 2 2
After:  [1, 1, 0, 2]

Before: [1, 2, 2, 0]
1 0 2 1
After:  [1, 0, 2, 0]

Before: [1, 1, 0, 2]
6 1 0 2
After:  [1, 1, 1, 2]

Before: [2, 2, 3, 2]
12 3 2 0
After:  [2, 2, 3, 2]

Before: [1, 0, 2, 2]
11 2 2 2
After:  [1, 0, 2, 2]

Before: [2, 2, 0, 3]
7 1 3 3
After:  [2, 2, 0, 0]

Before: [1, 1, 3, 1]
6 1 0 0
After:  [1, 1, 3, 1]

Before: [2, 1, 2, 1]
9 1 3 1
After:  [2, 1, 2, 1]

Before: [2, 1, 1, 0]
4 0 1 3
After:  [2, 1, 1, 1]

Before: [2, 0, 0, 3]
8 0 1 1
After:  [2, 1, 0, 3]

Before: [0, 1, 2, 2]
14 1 3 2
After:  [0, 1, 0, 2]

Before: [2, 1, 3, 2]
12 3 2 1
After:  [2, 2, 3, 2]

Before: [1, 1, 0, 1]
6 1 0 3
After:  [1, 1, 0, 1]

Before: [0, 0, 2, 0]
0 0 0 0
After:  [0, 0, 2, 0]

Before: [1, 1, 2, 1]
1 0 2 2
After:  [1, 1, 0, 1]

Before: [0, 2, 2, 1]
0 0 0 1
After:  [0, 0, 2, 1]

Before: [3, 2, 0, 3]
8 0 2 3
After:  [3, 2, 0, 1]

Before: [3, 1, 2, 1]
2 1 2 1
After:  [3, 0, 2, 1]

Before: [3, 1, 0, 2]
14 1 3 0
After:  [0, 1, 0, 2]

Before: [3, 2, 2, 0]
11 2 2 3
After:  [3, 2, 2, 2]

Before: [0, 2, 2, 2]
0 0 0 2
After:  [0, 2, 0, 2]

Before: [1, 3, 2, 3]
11 2 2 3
After:  [1, 3, 2, 2]

Before: [2, 0, 2, 1]
15 3 2 3
After:  [2, 0, 2, 1]

Before: [0, 3, 0, 3]
0 0 0 2
After:  [0, 3, 0, 3]

Before: [1, 1, 2, 2]
1 0 2 0
After:  [0, 1, 2, 2]

Before: [1, 2, 3, 2]
12 1 2 3
After:  [1, 2, 3, 2]

Before: [3, 1, 1, 3]
5 3 0 2
After:  [3, 1, 1, 3]

Before: [0, 1, 1, 2]
0 0 0 2
After:  [0, 1, 0, 2]

Before: [0, 1, 2, 1]
9 1 3 3
After:  [0, 1, 2, 1]

Before: [0, 1, 2, 3]
2 1 2 3
After:  [0, 1, 2, 0]

Before: [3, 1, 2, 2]
14 1 3 2
After:  [3, 1, 0, 2]

Before: [2, 3, 3, 0]
3 0 1 3
After:  [2, 3, 3, 1]

Before: [3, 3, 2, 3]
5 3 0 1
After:  [3, 1, 2, 3]

Before: [2, 1, 2, 1]
13 3 3 3
After:  [2, 1, 2, 0]

Before: [1, 1, 2, 1]
8 3 1 3
After:  [1, 1, 2, 0]

Before: [1, 2, 0, 0]
9 0 2 0
After:  [0, 2, 0, 0]

Before: [2, 1, 1, 0]
10 1 3 3
After:  [2, 1, 1, 1]

Before: [3, 1, 1, 2]
14 1 3 3
After:  [3, 1, 1, 0]

Before: [1, 2, 3, 2]
12 3 2 3
After:  [1, 2, 3, 2]

Before: [3, 1, 1, 3]
7 2 3 2
After:  [3, 1, 0, 3]

Before: [1, 2, 0, 0]
9 0 2 1
After:  [1, 0, 0, 0]

Before: [1, 2, 3, 3]
12 1 2 2
After:  [1, 2, 2, 3]

Before: [1, 1, 2, 2]
11 2 2 0
After:  [2, 1, 2, 2]

Before: [1, 1, 0, 1]
6 1 0 2
After:  [1, 1, 1, 1]

Before: [1, 1, 1, 1]
6 1 0 0
After:  [1, 1, 1, 1]

Before: [3, 1, 1, 3]
5 3 0 0
After:  [1, 1, 1, 3]

Before: [2, 1, 1, 3]
4 0 1 0
After:  [1, 1, 1, 3]

Before: [2, 1, 2, 2]
14 1 3 2
After:  [2, 1, 0, 2]

Before: [0, 1, 3, 1]
9 1 3 3
After:  [0, 1, 3, 1]

Before: [2, 1, 1, 1]
9 1 3 2
After:  [2, 1, 1, 1]

Before: [1, 1, 3, 3]
6 1 0 2
After:  [1, 1, 1, 3]

Before: [1, 3, 2, 1]
15 3 2 2
After:  [1, 3, 1, 1]

Before: [2, 3, 2, 1]
15 3 2 1
After:  [2, 1, 2, 1]

Before: [3, 2, 3, 3]
12 1 2 3
After:  [3, 2, 3, 2]

Before: [0, 1, 3, 0]
10 1 3 2
After:  [0, 1, 1, 0]

Before: [0, 0, 3, 2]
0 0 0 3
After:  [0, 0, 3, 0]

Before: [0, 1, 0, 1]
13 3 3 1
After:  [0, 0, 0, 1]

Before: [0, 0, 2, 3]
7 2 3 0
After:  [0, 0, 2, 3]

Before: [2, 2, 3, 0]
12 0 2 3
After:  [2, 2, 3, 2]

Before: [0, 1, 2, 1]
9 1 3 0
After:  [1, 1, 2, 1]

Before: [3, 0, 2, 0]
4 0 2 1
After:  [3, 1, 2, 0]

Before: [3, 3, 2, 1]
4 0 2 0
After:  [1, 3, 2, 1]

Before: [2, 1, 1, 2]
4 0 1 2
After:  [2, 1, 1, 2]

Before: [2, 1, 3, 2]
14 1 3 3
After:  [2, 1, 3, 0]

Before: [0, 2, 2, 1]
15 3 2 2
After:  [0, 2, 1, 1]

Before: [2, 1, 3, 1]
5 2 3 3
After:  [2, 1, 3, 0]

Before: [3, 1, 0, 1]
9 1 3 1
After:  [3, 1, 0, 1]

Before: [2, 1, 2, 2]
14 1 3 1
After:  [2, 0, 2, 2]

Before: [0, 1, 0, 0]
10 1 3 2
After:  [0, 1, 1, 0]

Before: [1, 1, 2, 1]
6 1 0 0
After:  [1, 1, 2, 1]

Before: [1, 0, 0, 1]
9 0 2 0
After:  [0, 0, 0, 1]

Before: [1, 1, 2, 1]
13 3 3 0
After:  [0, 1, 2, 1]

Before: [3, 1, 1, 1]
9 1 3 2
After:  [3, 1, 1, 1]

Before: [0, 1, 1, 1]
9 1 3 2
After:  [0, 1, 1, 1]

Before: [2, 0, 0, 2]
8 0 1 3
After:  [2, 0, 0, 1]

Before: [1, 0, 2, 2]
1 0 2 1
After:  [1, 0, 2, 2]

Before: [1, 1, 2, 2]
2 1 2 1
After:  [1, 0, 2, 2]

Before: [3, 3, 2, 3]
5 3 0 3
After:  [3, 3, 2, 1]

Before: [3, 1, 0, 2]
14 1 3 1
After:  [3, 0, 0, 2]

Before: [2, 1, 3, 3]
8 2 0 2
After:  [2, 1, 1, 3]

Before: [0, 1, 2, 0]
10 1 3 2
After:  [0, 1, 1, 0]

Before: [3, 2, 2, 1]
15 3 2 3
After:  [3, 2, 2, 1]

Before: [2, 0, 1, 2]
8 0 1 0
After:  [1, 0, 1, 2]

Before: [2, 3, 0, 1]
13 3 3 1
After:  [2, 0, 0, 1]

Before: [2, 1, 3, 1]
5 2 3 2
After:  [2, 1, 0, 1]

Before: [0, 1, 2, 1]
2 1 2 2
After:  [0, 1, 0, 1]

Before: [2, 1, 2, 2]
2 1 2 0
After:  [0, 1, 2, 2]

Before: [3, 1, 1, 0]
10 1 3 0
After:  [1, 1, 1, 0]

Before: [2, 1, 1, 2]
4 0 1 3
After:  [2, 1, 1, 1]

Before: [2, 1, 0, 2]
14 1 3 3
After:  [2, 1, 0, 0]

Before: [2, 1, 0, 3]
7 1 3 2
After:  [2, 1, 0, 3]

Before: [1, 3, 1, 1]
13 2 3 1
After:  [1, 0, 1, 1]

Before: [0, 2, 2, 1]
15 3 2 1
After:  [0, 1, 2, 1]

Before: [0, 3, 1, 1]
13 2 3 3
After:  [0, 3, 1, 0]

Before: [0, 2, 3, 2]
12 3 2 3
After:  [0, 2, 3, 2]

Before: [1, 3, 2, 0]
1 0 2 2
After:  [1, 3, 0, 0]

Before: [2, 0, 2, 2]
11 2 2 3
After:  [2, 0, 2, 2]

Before: [1, 0, 0, 2]
9 0 2 2
After:  [1, 0, 0, 2]

Before: [1, 1, 2, 1]
2 1 2 1
After:  [1, 0, 2, 1]

Before: [3, 2, 2, 2]
3 2 0 0
After:  [1, 2, 2, 2]

Before: [1, 1, 3, 2]
6 1 0 1
After:  [1, 1, 3, 2]

Before: [1, 1, 2, 0]
6 1 0 0
After:  [1, 1, 2, 0]

Before: [1, 1, 0, 2]
13 3 3 3
After:  [1, 1, 0, 0]

Before: [0, 3, 1, 1]
13 2 3 0
After:  [0, 3, 1, 1]

Before: [0, 2, 3, 1]
0 0 0 1
After:  [0, 0, 3, 1]

Before: [0, 1, 2, 0]
10 1 3 3
After:  [0, 1, 2, 1]

Before: [1, 2, 2, 2]
5 2 1 0
After:  [1, 2, 2, 2]

Before: [1, 1, 0, 2]
6 1 0 1
After:  [1, 1, 0, 2]

Before: [1, 0, 1, 3]
7 2 3 1
After:  [1, 0, 1, 3]

Before: [0, 2, 2, 2]
5 2 1 0
After:  [1, 2, 2, 2]

Before: [2, 0, 3, 2]
12 3 2 1
After:  [2, 2, 3, 2]

Before: [1, 1, 0, 2]
14 1 3 1
After:  [1, 0, 0, 2]

Before: [2, 3, 3, 1]
3 0 1 3
After:  [2, 3, 3, 1]

Before: [3, 0, 2, 1]
15 3 2 2
After:  [3, 0, 1, 1]

Before: [3, 1, 2, 2]
14 1 3 3
After:  [3, 1, 2, 0]

Before: [1, 0, 2, 3]
1 0 2 3
After:  [1, 0, 2, 0]

Before: [0, 2, 0, 1]
0 0 0 1
After:  [0, 0, 0, 1]

Before: [3, 1, 0, 1]
9 1 3 3
After:  [3, 1, 0, 1]

Before: [1, 1, 3, 2]
14 1 3 1
After:  [1, 0, 3, 2]

Before: [2, 1, 1, 0]
4 0 1 1
After:  [2, 1, 1, 0]

Before: [2, 1, 1, 1]
8 3 1 3
After:  [2, 1, 1, 0]

Before: [0, 1, 1, 0]
10 1 3 2
After:  [0, 1, 1, 0]

Before: [1, 0, 2, 1]
1 0 2 2
After:  [1, 0, 0, 1]

Before: [1, 2, 2, 3]
11 2 2 1
After:  [1, 2, 2, 3]

Before: [3, 1, 2, 0]
4 0 2 1
After:  [3, 1, 2, 0]

Before: [0, 0, 1, 0]
0 0 0 0
After:  [0, 0, 1, 0]

Before: [0, 2, 3, 3]
7 1 3 3
After:  [0, 2, 3, 0]

Before: [3, 1, 2, 1]
15 3 2 3
After:  [3, 1, 2, 1]

Before: [3, 1, 3, 3]
7 1 3 2
After:  [3, 1, 0, 3]

Before: [1, 1, 2, 0]
10 1 3 3
After:  [1, 1, 2, 1]

Before: [2, 1, 2, 1]
2 1 2 1
After:  [2, 0, 2, 1]

Before: [1, 1, 1, 1]
13 3 3 3
After:  [1, 1, 1, 0]

Before: [2, 1, 3, 1]
4 0 1 0
After:  [1, 1, 3, 1]

Before: [1, 1, 1, 1]
8 2 1 3
After:  [1, 1, 1, 0]

Before: [1, 1, 1, 3]
7 2 3 2
After:  [1, 1, 0, 3]

Before: [3, 2, 2, 2]
13 3 3 0
After:  [0, 2, 2, 2]

Before: [1, 3, 3, 2]
13 3 3 0
After:  [0, 3, 3, 2]

Before: [0, 3, 2, 1]
15 3 2 2
After:  [0, 3, 1, 1]

Before: [1, 2, 2, 2]
1 0 2 3
After:  [1, 2, 2, 0]

Before: [3, 1, 2, 1]
4 0 2 3
After:  [3, 1, 2, 1]

Before: [1, 1, 2, 1]
2 1 2 3
After:  [1, 1, 2, 0]

Before: [0, 1, 2, 0]
2 1 2 0
After:  [0, 1, 2, 0]

Before: [1, 1, 2, 3]
2 1 2 3
After:  [1, 1, 2, 0]

Before: [1, 1, 1, 2]
6 1 0 1
After:  [1, 1, 1, 2]

Before: [2, 3, 3, 3]
3 0 1 0
After:  [1, 3, 3, 3]

Before: [3, 2, 2, 0]
4 0 2 1
After:  [3, 1, 2, 0]

Before: [3, 1, 3, 3]
7 1 3 0
After:  [0, 1, 3, 3]

Before: [2, 3, 3, 1]
3 0 1 0
After:  [1, 3, 3, 1]

Before: [0, 1, 3, 0]
10 1 3 3
After:  [0, 1, 3, 1]

Before: [3, 1, 1, 0]
10 1 3 2
After:  [3, 1, 1, 0]

Before: [2, 2, 2, 0]
5 2 1 2
After:  [2, 2, 1, 0]

Before: [1, 1, 0, 0]
9 0 2 2
After:  [1, 1, 0, 0]

Before: [2, 3, 3, 0]
3 0 1 1
After:  [2, 1, 3, 0]

Before: [2, 1, 3, 2]
14 1 3 0
After:  [0, 1, 3, 2]

Before: [0, 1, 2, 2]
0 0 0 0
After:  [0, 1, 2, 2]

Before: [2, 0, 3, 0]
12 0 2 0
After:  [2, 0, 3, 0]

Before: [1, 1, 0, 0]
10 1 3 2
After:  [1, 1, 1, 0]

Before: [1, 1, 1, 2]
14 1 3 1
After:  [1, 0, 1, 2]

Before: [2, 1, 2, 3]
2 1 2 1
After:  [2, 0, 2, 3]

Before: [2, 3, 1, 0]
3 0 1 0
After:  [1, 3, 1, 0]

Before: [0, 3, 1, 3]
7 2 3 2
After:  [0, 3, 0, 3]

Before: [0, 1, 2, 1]
15 3 2 0
After:  [1, 1, 2, 1]

Before: [3, 3, 2, 2]
11 2 2 2
After:  [3, 3, 2, 2]

Before: [0, 1, 3, 1]
0 0 0 2
After:  [0, 1, 0, 1]

Before: [3, 2, 0, 3]
5 3 0 1
After:  [3, 1, 0, 3]

Before: [0, 3, 2, 2]
3 2 1 0
After:  [1, 3, 2, 2]

Before: [1, 1, 3, 1]
6 1 0 1
After:  [1, 1, 3, 1]

Before: [2, 2, 2, 1]
15 3 2 1
After:  [2, 1, 2, 1]

Before: [1, 1, 2, 0]
10 1 3 0
After:  [1, 1, 2, 0]

Before: [1, 1, 1, 3]
6 1 0 2
After:  [1, 1, 1, 3]

Before: [2, 0, 3, 3]
8 0 1 3
After:  [2, 0, 3, 1]

Before: [3, 1, 3, 2]
13 3 3 3
After:  [3, 1, 3, 0]

Before: [3, 2, 2, 2]
4 0 2 2
After:  [3, 2, 1, 2]

Before: [1, 1, 1, 0]
8 2 1 2
After:  [1, 1, 0, 0]

Before: [1, 0, 2, 1]
1 0 2 0
After:  [0, 0, 2, 1]

Before: [2, 3, 2, 1]
13 3 3 0
After:  [0, 3, 2, 1]

Before: [3, 0, 2, 3]
4 0 2 2
After:  [3, 0, 1, 3]

Before: [2, 1, 0, 1]
9 1 3 0
After:  [1, 1, 0, 1]

Before: [3, 2, 2, 1]
15 3 2 2
After:  [3, 2, 1, 1]

Before: [3, 1, 2, 1]
2 1 2 3
After:  [3, 1, 2, 0]

Before: [1, 1, 0, 0]
6 1 0 0
After:  [1, 1, 0, 0]

Before: [1, 0, 3, 2]
13 3 3 0
After:  [0, 0, 3, 2]

Before: [0, 2, 2, 2]
5 2 1 3
After:  [0, 2, 2, 1]

Before: [2, 3, 3, 2]
12 0 2 3
After:  [2, 3, 3, 2]

Before: [0, 2, 1, 1]
0 0 0 0
After:  [0, 2, 1, 1]

Before: [3, 0, 2, 1]
11 2 2 3
After:  [3, 0, 2, 2]

Before: [3, 2, 2, 1]
4 0 2 3
After:  [3, 2, 2, 1]

Before: [3, 1, 0, 3]
7 1 3 2
After:  [3, 1, 0, 3]

Before: [1, 1, 2, 1]
9 1 3 0
After:  [1, 1, 2, 1]

Before: [0, 0, 1, 3]
7 2 3 0
After:  [0, 0, 1, 3]

Before: [0, 1, 3, 1]
8 3 1 3
After:  [0, 1, 3, 0]

Before: [2, 1, 1, 1]
4 0 1 2
After:  [2, 1, 1, 1]

Before: [1, 1, 0, 0]
10 1 3 0
After:  [1, 1, 0, 0]

Before: [0, 1, 3, 2]
13 3 3 3
After:  [0, 1, 3, 0]

Before: [1, 1, 2, 0]
1 0 2 0
After:  [0, 1, 2, 0]

Before: [3, 1, 2, 0]
2 1 2 1
After:  [3, 0, 2, 0]

Before: [0, 1, 1, 3]
7 2 3 3
After:  [0, 1, 1, 0]

Before: [0, 2, 3, 3]
12 1 2 0
After:  [2, 2, 3, 3]

Before: [2, 1, 1, 1]
8 3 1 0
After:  [0, 1, 1, 1]

Before: [0, 1, 1, 2]
14 1 3 2
After:  [0, 1, 0, 2]

Before: [3, 1, 2, 1]
9 1 3 1
After:  [3, 1, 2, 1]

Before: [1, 2, 3, 2]
12 1 2 2
After:  [1, 2, 2, 2]

Before: [2, 3, 2, 2]
3 0 1 0
After:  [1, 3, 2, 2]

Before: [1, 1, 1, 0]
10 1 3 0
After:  [1, 1, 1, 0]

Before: [3, 2, 2, 2]
4 0 2 0
After:  [1, 2, 2, 2]

Before: [3, 1, 0, 2]
14 1 3 3
After:  [3, 1, 0, 0]

Before: [0, 3, 3, 2]
12 3 2 3
After:  [0, 3, 3, 2]

Before: [3, 3, 0, 0]
8 0 2 1
After:  [3, 1, 0, 0]

Before: [3, 0, 2, 0]
4 0 2 3
After:  [3, 0, 2, 1]

Before: [0, 3, 2, 1]
3 2 1 1
After:  [0, 1, 2, 1]

Before: [3, 0, 2, 3]
4 0 2 0
After:  [1, 0, 2, 3]

Before: [0, 1, 0, 0]
10 1 3 1
After:  [0, 1, 0, 0]

Before: [3, 3, 3, 3]
5 3 2 1
After:  [3, 1, 3, 3]

Before: [1, 2, 2, 0]
1 0 2 2
After:  [1, 2, 0, 0]

Before: [0, 3, 1, 2]
0 0 0 1
After:  [0, 0, 1, 2]

Before: [0, 3, 2, 3]
3 2 1 1
After:  [0, 1, 2, 3]

Before: [3, 1, 3, 2]
14 1 3 0
After:  [0, 1, 3, 2]

Before: [3, 1, 1, 3]
7 1 3 3
After:  [3, 1, 1, 0]

Before: [2, 2, 2, 2]
13 3 3 0
After:  [0, 2, 2, 2]

Before: [1, 1, 3, 3]
6 1 0 1
After:  [1, 1, 3, 3]

Before: [1, 1, 2, 0]
6 1 0 3
After:  [1, 1, 2, 1]

Before: [3, 3, 2, 1]
3 2 0 1
After:  [3, 1, 2, 1]

Before: [1, 1, 2, 3]
2 1 2 0
After:  [0, 1, 2, 3]

Before: [0, 3, 3, 1]
13 3 3 1
After:  [0, 0, 3, 1]

Before: [1, 2, 2, 0]
1 0 2 3
After:  [1, 2, 2, 0]

Before: [3, 2, 2, 0]
4 0 2 0
After:  [1, 2, 2, 0]

Before: [3, 1, 1, 3]
7 1 3 1
After:  [3, 0, 1, 3]

Before: [2, 2, 2, 3]
7 2 3 2
After:  [2, 2, 0, 3]

Before: [2, 1, 2, 2]
2 1 2 2
After:  [2, 1, 0, 2]

Before: [2, 0, 0, 3]
11 3 3 2
After:  [2, 0, 3, 3]

Before: [1, 1, 2, 1]
1 0 2 1
After:  [1, 0, 2, 1]

Before: [0, 1, 2, 1]
15 3 2 1
After:  [0, 1, 2, 1]

Before: [0, 3, 3, 3]
0 0 0 3
After:  [0, 3, 3, 0]

Before: [0, 1, 2, 3]
2 1 2 0
After:  [0, 1, 2, 3]

Before: [3, 3, 2, 3]
4 0 2 2
After:  [3, 3, 1, 3]

Before: [3, 2, 3, 3]
12 1 2 0
After:  [2, 2, 3, 3]

Before: [1, 1, 3, 0]
6 1 0 2
After:  [1, 1, 1, 0]

Before: [2, 3, 3, 3]
5 3 2 1
After:  [2, 1, 3, 3]

Before: [0, 1, 1, 2]
0 0 0 0
After:  [0, 1, 1, 2]

Before: [3, 1, 3, 2]
12 3 2 0
After:  [2, 1, 3, 2]

Before: [1, 3, 2, 1]
1 0 2 3
After:  [1, 3, 2, 0]

Before: [0, 1, 3, 2]
14 1 3 1
After:  [0, 0, 3, 2]

Before: [1, 1, 2, 3]
7 1 3 1
After:  [1, 0, 2, 3]

Before: [2, 2, 3, 0]
12 0 2 1
After:  [2, 2, 3, 0]

Before: [0, 1, 2, 2]
14 1 3 1
After:  [0, 0, 2, 2]

Before: [1, 1, 1, 2]
13 3 3 2
After:  [1, 1, 0, 2]

Before: [3, 3, 2, 0]
4 0 2 0
After:  [1, 3, 2, 0]

Before: [2, 1, 2, 2]
11 2 2 0
After:  [2, 1, 2, 2]

Before: [0, 0, 1, 3]
0 0 0 2
After:  [0, 0, 0, 3]

Before: [1, 0, 2, 1]
15 3 2 1
After:  [1, 1, 2, 1]

Before: [3, 2, 2, 2]
4 0 2 1
After:  [3, 1, 2, 2]

Before: [0, 2, 3, 3]
12 1 2 3
After:  [0, 2, 3, 2]

Before: [3, 3, 0, 3]
8 0 2 2
After:  [3, 3, 1, 3]

Before: [1, 1, 0, 2]
14 1 3 0
After:  [0, 1, 0, 2]

Before: [2, 3, 0, 3]
3 0 1 2
After:  [2, 3, 1, 3]

Before: [1, 1, 1, 1]
8 2 1 1
After:  [1, 0, 1, 1]

Before: [1, 1, 2, 0]
1 0 2 3
After:  [1, 1, 2, 0]

Before: [1, 2, 2, 1]
5 2 1 0
After:  [1, 2, 2, 1]

Before: [1, 1, 2, 3]
1 0 2 3
After:  [1, 1, 2, 0]

Before: [0, 1, 3, 0]
10 1 3 0
After:  [1, 1, 3, 0]

Before: [0, 1, 1, 1]
9 1 3 1
After:  [0, 1, 1, 1]

Before: [1, 1, 0, 3]
6 1 0 0
After:  [1, 1, 0, 3]

Before: [1, 2, 2, 3]
1 0 2 0
After:  [0, 2, 2, 3]

Before: [3, 3, 1, 2]
13 3 3 2
After:  [3, 3, 0, 2]

Before: [2, 2, 2, 1]
15 3 2 3
After:  [2, 2, 2, 1]

Before: [1, 2, 1, 3]
7 1 3 1
After:  [1, 0, 1, 3]

Before: [1, 1, 0, 2]
9 0 2 3
After:  [1, 1, 0, 0]

Before: [3, 3, 0, 2]
8 0 2 1
After:  [3, 1, 0, 2]

Before: [1, 0, 0, 3]
11 3 3 3
After:  [1, 0, 0, 3]

Before: [0, 3, 2, 2]
0 0 0 2
After:  [0, 3, 0, 2]

Before: [2, 3, 3, 0]
3 0 1 0
After:  [1, 3, 3, 0]

Before: [3, 3, 2, 1]
3 2 0 2
After:  [3, 3, 1, 1]

Before: [1, 1, 2, 2]
14 1 3 3
After:  [1, 1, 2, 0]

Before: [3, 3, 1, 1]
13 2 3 3
After:  [3, 3, 1, 0]

Before: [3, 1, 2, 0]
4 0 2 3
After:  [3, 1, 2, 1]

Before: [0, 3, 2, 2]
3 2 1 3
After:  [0, 3, 2, 1]

Before: [3, 1, 2, 1]
15 3 2 2
After:  [3, 1, 1, 1]

Before: [3, 1, 2, 2]
2 1 2 2
After:  [3, 1, 0, 2]

Before: [0, 0, 2, 1]
15 3 2 1
After:  [0, 1, 2, 1]

Before: [1, 1, 2, 1]
15 3 2 1
After:  [1, 1, 2, 1]

Before: [1, 3, 2, 2]
8 3 2 0
After:  [0, 3, 2, 2]

Before: [1, 2, 2, 1]
15 3 2 3
After:  [1, 2, 2, 1]

Before: [2, 0, 2, 1]
15 3 2 2
After:  [2, 0, 1, 1]

Before: [2, 2, 2, 1]
15 3 2 0
After:  [1, 2, 2, 1]

Before: [1, 3, 3, 2]
13 3 3 3
After:  [1, 3, 3, 0]

Before: [2, 0, 0, 2]
13 3 3 2
After:  [2, 0, 0, 2]

Before: [1, 0, 0, 0]
9 0 2 1
After:  [1, 0, 0, 0]

Before: [2, 2, 2, 3]
11 3 3 0
After:  [3, 2, 2, 3]

Before: [1, 3, 2, 1]
1 0 2 2
After:  [1, 3, 0, 1]

Before: [3, 1, 3, 1]
9 1 3 1
After:  [3, 1, 3, 1]

Before: [0, 2, 3, 0]
12 1 2 2
After:  [0, 2, 2, 0]

Before: [1, 1, 3, 2]
6 1 0 0
After:  [1, 1, 3, 2]

Before: [3, 0, 2, 2]
8 3 2 1
After:  [3, 0, 2, 2]

Before: [1, 1, 0, 1]
9 0 2 0
After:  [0, 1, 0, 1]

Before: [1, 1, 2, 1]
9 1 3 1
After:  [1, 1, 2, 1]

Before: [2, 2, 2, 0]
5 2 0 0
After:  [1, 2, 2, 0]

Before: [3, 3, 2, 1]
15 3 2 2
After:  [3, 3, 1, 1]

Before: [0, 1, 1, 1]
9 1 3 3
After:  [0, 1, 1, 1]

Before: [1, 1, 3, 0]
6 1 0 1
After:  [1, 1, 3, 0]

Before: [0, 3, 1, 3]
0 0 0 2
After:  [0, 3, 0, 3]

Before: [2, 3, 3, 0]
8 2 0 1
After:  [2, 1, 3, 0]

Before: [3, 1, 3, 2]
14 1 3 1
After:  [3, 0, 3, 2]

Before: [0, 3, 1, 3]
7 2 3 0
After:  [0, 3, 1, 3]

Before: [2, 1, 3, 1]
4 0 1 2
After:  [2, 1, 1, 1]

Before: [0, 1, 3, 2]
0 0 0 2
After:  [0, 1, 0, 2]

Before: [2, 2, 3, 1]
12 0 2 2
After:  [2, 2, 2, 1]

Before: [3, 1, 3, 1]
13 3 3 3
After:  [3, 1, 3, 0]

Before: [3, 3, 2, 2]
3 2 1 0
After:  [1, 3, 2, 2]

Before: [0, 1, 2, 3]
2 1 2 2
After:  [0, 1, 0, 3]

Before: [3, 1, 2, 2]
3 2 0 0
After:  [1, 1, 2, 2]

Before: [0, 1, 1, 0]
8 2 1 3
After:  [0, 1, 1, 0]

Before: [1, 1, 2, 3]
1 0 2 0
After:  [0, 1, 2, 3]

Before: [1, 2, 0, 3]
7 1 3 3
After:  [1, 2, 0, 0]

Before: [2, 1, 3, 0]
10 1 3 1
After:  [2, 1, 3, 0]

Before: [3, 1, 2, 0]
3 2 0 0
After:  [1, 1, 2, 0]

Before: [1, 1, 2, 2]
6 1 0 2
After:  [1, 1, 1, 2]

Before: [0, 1, 2, 0]
10 1 3 1
After:  [0, 1, 2, 0]

Before: [2, 1, 2, 2]
5 2 0 1
After:  [2, 1, 2, 2]

Before: [2, 1, 0, 2]
14 1 3 0
After:  [0, 1, 0, 2]

Before: [1, 1, 2, 1]
15 3 2 2
After:  [1, 1, 1, 1]

Before: [3, 1, 2, 0]
2 1 2 2
After:  [3, 1, 0, 0]

Before: [1, 1, 2, 3]
2 1 2 1
After:  [1, 0, 2, 3]

Before: [3, 0, 2, 2]
3 2 0 2
After:  [3, 0, 1, 2]

Before: [0, 0, 3, 2]
13 3 3 2
After:  [0, 0, 0, 2]

Before: [1, 0, 2, 2]
1 0 2 2
After:  [1, 0, 0, 2]

Before: [0, 1, 2, 3]
11 3 3 3
After:  [0, 1, 2, 3]

Before: [2, 0, 3, 3]
5 3 2 1
After:  [2, 1, 3, 3]

Before: [0, 2, 0, 3]
0 0 0 3
After:  [0, 2, 0, 0]

Before: [2, 2, 0, 1]
13 3 3 3
After:  [2, 2, 0, 0]

Before: [0, 1, 2, 2]
14 1 3 3
After:  [0, 1, 2, 0]

Before: [2, 1, 2, 1]
4 0 1 1
After:  [2, 1, 2, 1]

Before: [1, 1, 3, 1]
9 1 3 0
After:  [1, 1, 3, 1]

Before: [1, 1, 1, 3]
6 1 0 1
After:  [1, 1, 1, 3]

Before: [3, 1, 1, 0]
8 2 1 1
After:  [3, 0, 1, 0]

Before: [3, 2, 2, 1]
15 3 2 1
After:  [3, 1, 2, 1]

Before: [2, 1, 2, 3]
11 3 3 0
After:  [3, 1, 2, 3]

Before: [0, 0, 2, 1]
15 3 2 2
After:  [0, 0, 1, 1]

Before: [1, 2, 2, 1]
15 3 2 0
After:  [1, 2, 2, 1]

Before: [0, 3, 2, 2]
0 0 0 3
After:  [0, 3, 2, 0]

Before: [2, 1, 2, 0]
2 1 2 3
After:  [2, 1, 2, 0]

Before: [0, 3, 2, 3]
3 2 1 0
After:  [1, 3, 2, 3]

Before: [1, 2, 2, 3]
1 0 2 3
After:  [1, 2, 2, 0]

Before: [2, 3, 0, 0]
3 0 1 3
After:  [2, 3, 0, 1]

Before: [2, 3, 1, 3]
3 0 1 1
After:  [2, 1, 1, 3]

Before: [3, 1, 2, 1]
2 1 2 0
After:  [0, 1, 2, 1]

Before: [3, 1, 3, 2]
12 3 2 1
After:  [3, 2, 3, 2]

Before: [3, 1, 2, 3]
2 1 2 3
After:  [3, 1, 2, 0]

Before: [2, 1, 2, 0]
2 1 2 2
After:  [2, 1, 0, 0]

Before: [0, 3, 2, 3]
0 0 0 3
After:  [0, 3, 2, 0]

Before: [1, 0, 0, 2]
13 3 3 3
After:  [1, 0, 0, 0]

Before: [2, 3, 3, 3]
3 0 1 1
After:  [2, 1, 3, 3]

Before: [0, 1, 0, 3]
7 1 3 3
After:  [0, 1, 0, 0]

Before: [0, 1, 2, 2]
2 1 2 2
After:  [0, 1, 0, 2]

Before: [2, 0, 3, 0]
8 2 0 3
After:  [2, 0, 3, 1]

Before: [2, 3, 2, 1]
15 3 2 3
After:  [2, 3, 2, 1]

Before: [0, 2, 3, 2]
13 3 3 3
After:  [0, 2, 3, 0]

Before: [0, 2, 2, 3]
7 1 3 2
After:  [0, 2, 0, 3]

Before: [3, 2, 1, 3]
7 1 3 3
After:  [3, 2, 1, 0]

Before: [2, 1, 1, 2]
14 1 3 0
After:  [0, 1, 1, 2]

Before: [3, 1, 2, 0]
4 0 2 2
After:  [3, 1, 1, 0]

Before: [1, 2, 3, 1]
12 1 2 0
After:  [2, 2, 3, 1]

Before: [0, 0, 3, 2]
12 3 2 3
After:  [0, 0, 3, 2]

Before: [2, 1, 2, 0]
10 1 3 3
After:  [2, 1, 2, 1]

Before: [2, 0, 3, 3]
12 0 2 3
After:  [2, 0, 3, 2]

Before: [1, 1, 1, 2]
14 1 3 2
After:  [1, 1, 0, 2]

Before: [0, 2, 0, 3]
11 3 3 2
After:  [0, 2, 3, 3]

Before: [3, 2, 1, 3]
7 2 3 3
After:  [3, 2, 1, 0]

Before: [3, 1, 2, 2]
8 3 2 3
After:  [3, 1, 2, 0]

Before: [2, 3, 2, 3]
3 0 1 0
After:  [1, 3, 2, 3]

Before: [2, 1, 2, 2]
4 0 1 3
After:  [2, 1, 2, 1]

Before: [3, 2, 2, 2]
3 2 0 2
After:  [3, 2, 1, 2]

Before: [3, 1, 2, 1]
4 0 2 2
After:  [3, 1, 1, 1]

Before: [2, 3, 2, 1]
15 3 2 0
After:  [1, 3, 2, 1]

Before: [2, 1, 3, 2]
4 0 1 3
After:  [2, 1, 3, 1]

Before: [0, 1, 3, 2]
14 1 3 0
After:  [0, 1, 3, 2]

Before: [1, 2, 2, 1]
15 3 2 1
After:  [1, 1, 2, 1]

Before: [1, 3, 0, 2]
9 0 2 0
After:  [0, 3, 0, 2]

Before: [1, 1, 3, 0]
6 1 0 3
After:  [1, 1, 3, 1]

Before: [1, 0, 2, 0]
1 0 2 2
After:  [1, 0, 0, 0]

Before: [0, 1, 0, 3]
0 0 0 1
After:  [0, 0, 0, 3]

Before: [1, 3, 2, 3]
1 0 2 1
After:  [1, 0, 2, 3]

Before: [3, 3, 2, 2]
3 2 1 2
After:  [3, 3, 1, 2]

Before: [2, 1, 0, 2]
4 0 1 3
After:  [2, 1, 0, 1]

Before: [2, 2, 1, 3]
7 2 3 0
After:  [0, 2, 1, 3]

Before: [2, 1, 2, 2]
4 0 1 2
After:  [2, 1, 1, 2]

Before: [2, 1, 3, 2]
12 3 2 3
After:  [2, 1, 3, 2]

Before: [2, 2, 3, 3]
5 3 2 1
After:  [2, 1, 3, 3]

Before: [0, 1, 1, 0]
10 1 3 0
After:  [1, 1, 1, 0]

Before: [0, 3, 2, 1]
13 3 3 3
After:  [0, 3, 2, 0]

Before: [0, 2, 3, 2]
12 3 2 1
After:  [0, 2, 3, 2]

Before: [0, 2, 3, 1]
0 0 0 0
After:  [0, 2, 3, 1]

Before: [1, 1, 0, 1]
9 0 2 1
After:  [1, 0, 0, 1]

Before: [3, 2, 3, 3]
7 1 3 1
After:  [3, 0, 3, 3]

Before: [0, 3, 0, 3]
11 3 3 3
After:  [0, 3, 0, 3]

Before: [3, 3, 2, 1]
15 3 2 1
After:  [3, 1, 2, 1]

Before: [1, 1, 2, 1]
6 1 0 1
After:  [1, 1, 2, 1]

Before: [3, 3, 2, 3]
4 0 2 0
After:  [1, 3, 2, 3]

Before: [2, 3, 3, 0]
12 0 2 3
After:  [2, 3, 3, 2]

Before: [1, 3, 2, 0]
3 2 1 1
After:  [1, 1, 2, 0]

Before: [3, 3, 2, 3]
3 2 0 1
After:  [3, 1, 2, 3]

Before: [0, 2, 3, 1]
12 1 2 0
After:  [2, 2, 3, 1]

Before: [3, 0, 2, 0]
3 2 0 1
After:  [3, 1, 2, 0]

Before: [1, 3, 2, 1]
1 0 2 1
After:  [1, 0, 2, 1]

Before: [1, 1, 2, 1]
6 1 0 3
After:  [1, 1, 2, 1]

Before: [1, 2, 3, 2]
12 1 2 1
After:  [1, 2, 3, 2]

Before: [1, 1, 2, 1]
1 0 2 3
After:  [1, 1, 2, 0]

Before: [2, 1, 0, 0]
10 1 3 0
After:  [1, 1, 0, 0]

Before: [1, 2, 2, 0]
5 2 1 1
After:  [1, 1, 2, 0]

Before: [3, 3, 2, 0]
4 0 2 1
After:  [3, 1, 2, 0]

Before: [0, 0, 0, 3]
0 0 0 0
After:  [0, 0, 0, 3]

Before: [1, 1, 1, 0]
6 1 0 0
After:  [1, 1, 1, 0]

Before: [1, 1, 2, 3]
1 0 2 2
After:  [1, 1, 0, 3]

Before: [3, 0, 2, 1]
4 0 2 0
After:  [1, 0, 2, 1]

Before: [1, 1, 0, 0]
6 1 0 2
After:  [1, 1, 1, 0]

Before: [1, 1, 1, 0]
8 2 1 0
After:  [0, 1, 1, 0]

Before: [3, 2, 2, 3]
5 2 1 2
After:  [3, 2, 1, 3]

Before: [3, 3, 2, 1]
4 0 2 2
After:  [3, 3, 1, 1]

Before: [2, 3, 0, 2]
3 0 1 2
After:  [2, 3, 1, 2]

Before: [1, 3, 0, 2]
9 0 2 2
After:  [1, 3, 0, 2]

Before: [1, 2, 0, 1]
9 0 2 1
After:  [1, 0, 0, 1]

Before: [2, 0, 2, 0]
5 2 0 3
After:  [2, 0, 2, 1]

Before: [1, 1, 3, 1]
8 3 1 2
After:  [1, 1, 0, 1]

Before: [1, 1, 3, 0]
10 1 3 0
After:  [1, 1, 3, 0]

Before: [2, 3, 3, 2]
8 2 0 2
After:  [2, 3, 1, 2]

Before: [3, 1, 0, 0]
10 1 3 1
After:  [3, 1, 0, 0]

Before: [1, 1, 0, 3]
9 0 2 1
After:  [1, 0, 0, 3]

Before: [3, 2, 3, 2]
12 3 2 2
After:  [3, 2, 2, 2]

Before: [1, 3, 2, 0]
1 0 2 1
After:  [1, 0, 2, 0]

Before: [1, 2, 0, 1]
13 3 3 0
After:  [0, 2, 0, 1]

Before: [0, 1, 3, 3]
5 3 2 3
After:  [0, 1, 3, 1]

Before: [1, 1, 1, 0]
10 1 3 1
After:  [1, 1, 1, 0]

Before: [2, 0, 2, 0]
5 2 0 1
After:  [2, 1, 2, 0]

Before: [0, 1, 2, 1]
2 1 2 3
After:  [0, 1, 2, 0]

Before: [3, 2, 3, 3]
7 1 3 0
After:  [0, 2, 3, 3]

Before: [0, 3, 0, 0]
0 0 0 0
After:  [0, 3, 0, 0]

Before: [3, 1, 3, 1]
8 3 1 1
After:  [3, 0, 3, 1]

Before: [0, 1, 3, 2]
14 1 3 2
After:  [0, 1, 0, 2]

Before: [2, 3, 1, 3]
3 0 1 0
After:  [1, 3, 1, 3]

Before: [1, 1, 0, 2]
6 1 0 3
After:  [1, 1, 0, 1]

Before: [1, 3, 2, 2]
3 2 1 1
After:  [1, 1, 2, 2]

Before: [0, 2, 2, 1]
15 3 2 0
After:  [1, 2, 2, 1]

Before: [2, 1, 2, 0]
10 1 3 1
After:  [2, 1, 2, 0]

Before: [2, 0, 2, 0]
11 2 2 0
After:  [2, 0, 2, 0]

Before: [0, 1, 0, 2]
13 3 3 0
After:  [0, 1, 0, 2]

Before: [1, 1, 0, 3]
6 1 0 3
After:  [1, 1, 0, 1]

Before: [1, 3, 2, 2]
1 0 2 3
After:  [1, 3, 2, 0]

Before: [3, 1, 2, 3]
2 1 2 2
After:  [3, 1, 0, 3]

Before: [3, 1, 2, 3]
4 0 2 0
After:  [1, 1, 2, 3]

Before: [2, 1, 3, 2]
12 0 2 3
After:  [2, 1, 3, 2]

Before: [3, 1, 2, 2]
2 1 2 0
After:  [0, 1, 2, 2]

Before: [1, 1, 2, 2]
14 1 3 0
After:  [0, 1, 2, 2]

Before: [3, 1, 0, 2]
8 0 2 0
After:  [1, 1, 0, 2]

Before: [2, 3, 2, 1]
15 3 2 2
After:  [2, 3, 1, 1]

Before: [3, 1, 0, 2]
13 3 3 3
After:  [3, 1, 0, 0]

Before: [3, 1, 2, 0]
10 1 3 3
After:  [3, 1, 2, 1]

Before: [0, 0, 1, 3]
0 0 0 1
After:  [0, 0, 1, 3]

Before: [3, 3, 3, 3]
11 3 3 2
After:  [3, 3, 3, 3]

Before: [0, 1, 1, 0]
10 1 3 3
After:  [0, 1, 1, 1]

Before: [3, 2, 2, 3]
5 2 1 3
After:  [3, 2, 2, 1]

Before: [1, 0, 0, 1]
9 0 2 2
After:  [1, 0, 0, 1]

Before: [2, 2, 2, 0]
5 2 1 0
After:  [1, 2, 2, 0]

Before: [1, 1, 2, 1]
15 3 2 0
After:  [1, 1, 2, 1]

Before: [2, 1, 1, 2]
14 1 3 2
After:  [2, 1, 0, 2]

Before: [3, 2, 2, 3]
11 3 3 1
After:  [3, 3, 2, 3]

Before: [1, 1, 2, 0]
6 1 0 2
After:  [1, 1, 1, 0]

Before: [3, 0, 0, 1]
8 0 2 3
After:  [3, 0, 0, 1]

Before: [3, 3, 3, 3]
5 3 2 3
After:  [3, 3, 3, 1]

Before: [0, 1, 2, 2]
14 1 3 0
After:  [0, 1, 2, 2]

Before: [3, 1, 0, 1]
9 1 3 2
After:  [3, 1, 1, 1]

Before: [3, 1, 3, 0]
10 1 3 0
After:  [1, 1, 3, 0]

Before: [3, 2, 1, 3]
7 2 3 2
After:  [3, 2, 0, 3]

Before: [2, 1, 3, 3]
8 2 0 3
After:  [2, 1, 3, 1]

Before: [0, 3, 2, 3]
11 2 2 3
After:  [0, 3, 2, 2]

Before: [0, 1, 2, 1]
2 1 2 1
After:  [0, 0, 2, 1]

Before: [2, 1, 2, 1]
4 0 1 0
After:  [1, 1, 2, 1]

Before: [1, 1, 3, 0]
6 1 0 0
After:  [1, 1, 3, 0]

Before: [2, 1, 2, 0]
4 0 1 1
After:  [2, 1, 2, 0]

Before: [0, 1, 0, 2]
14 1 3 2
After:  [0, 1, 0, 2]

Before: [1, 1, 1, 3]
7 1 3 3
After:  [1, 1, 1, 0]

Before: [0, 1, 1, 1]
0 0 0 0
After:  [0, 1, 1, 1]

Before: [1, 2, 3, 2]
12 3 2 2
After:  [1, 2, 2, 2]

Before: [1, 1, 0, 3]
7 1 3 3
After:  [1, 1, 0, 0]

Before: [1, 2, 1, 3]
7 2 3 1
After:  [1, 0, 1, 3]

Before: [3, 1, 0, 2]
14 1 3 2
After:  [3, 1, 0, 2]

Before: [2, 3, 3, 3]
12 0 2 3
After:  [2, 3, 3, 2]

Before: [3, 2, 3, 1]
12 1 2 0
After:  [2, 2, 3, 1]

Before: [1, 1, 1, 2]
6 1 0 2
After:  [1, 1, 1, 2]

Before: [0, 0, 2, 1]
11 2 2 3
After:  [0, 0, 2, 2]

Before: [0, 3, 1, 3]
0 0 0 1
After:  [0, 0, 1, 3]

Before: [2, 1, 3, 0]
8 2 0 2
After:  [2, 1, 1, 0]

Before: [2, 1, 3, 3]
12 0 2 1
After:  [2, 2, 3, 3]

Before: [1, 2, 3, 3]
12 1 2 1
After:  [1, 2, 3, 3]

Before: [1, 1, 0, 3]
6 1 0 2
After:  [1, 1, 1, 3]

Before: [3, 3, 2, 2]
4 0 2 3
After:  [3, 3, 2, 1]

Before: [3, 2, 0, 2]
13 3 3 3
After:  [3, 2, 0, 0]

Before: [1, 1, 0, 1]
6 1 0 1
After:  [1, 1, 0, 1]

Before: [3, 3, 2, 3]
7 2 3 0
After:  [0, 3, 2, 3]

Before: [3, 1, 2, 2]
2 1 2 1
After:  [3, 0, 2, 2]

Before: [3, 1, 3, 1]
9 1 3 2
After:  [3, 1, 1, 1]

Before: [3, 3, 2, 1]
15 3 2 3
After:  [3, 3, 2, 1]

Before: [0, 1, 3, 0]
10 1 3 1
After:  [0, 1, 3, 0]

Before: [1, 1, 2, 2]
6 1 0 0
After:  [1, 1, 2, 2]

Before: [2, 0, 1, 1]
8 0 1 2
After:  [2, 0, 1, 1]

Before: [1, 1, 2, 3]
11 2 2 2
After:  [1, 1, 2, 3]

Before: [0, 3, 3, 2]
12 3 2 1
After:  [0, 2, 3, 2]

Before: [0, 1, 2, 1]
9 1 3 1
After:  [0, 1, 2, 1]

Before: [3, 0, 3, 3]
5 3 0 1
After:  [3, 1, 3, 3]

Before: [1, 0, 0, 1]
9 0 2 3
After:  [1, 0, 0, 0]

Before: [0, 1, 1, 0]
10 1 3 1
After:  [0, 1, 1, 0]

Before: [1, 1, 3, 2]
6 1 0 2
After:  [1, 1, 1, 2]

Before: [3, 3, 3, 1]
5 2 3 0
After:  [0, 3, 3, 1]

Before: [3, 1, 2, 3]
7 1 3 2
After:  [3, 1, 0, 3]

Before: [3, 3, 2, 3]
11 3 3 0
After:  [3, 3, 2, 3]

Before: [1, 1, 0, 1]
8 3 1 2
After:  [1, 1, 0, 1]

Before: [0, 1, 3, 2]
14 1 3 3
After:  [0, 1, 3, 0]

Before: [2, 3, 0, 3]
3 0 1 3
After:  [2, 3, 0, 1]

Before: [2, 1, 3, 2]
12 0 2 2
After:  [2, 1, 2, 2]

Before: [2, 1, 0, 0]
10 1 3 3
After:  [2, 1, 0, 1]

Before: [3, 2, 2, 0]
3 2 0 0
After:  [1, 2, 2, 0]

Before: [2, 2, 2, 1]
13 3 3 2
After:  [2, 2, 0, 1]

Before: [3, 1, 3, 1]
5 2 3 1
After:  [3, 0, 3, 1]

Before: [2, 3, 3, 3]
12 0 2 1
After:  [2, 2, 3, 3]

Before: [1, 1, 1, 1]
6 1 0 3
After:  [1, 1, 1, 1]

Before: [0, 1, 0, 0]
10 1 3 0
After:  [1, 1, 0, 0]

Before: [3, 1, 2, 3]
7 1 3 0
After:  [0, 1, 2, 3]

Before: [2, 1, 2, 1]
15 3 2 2
After:  [2, 1, 1, 1]

Before: [3, 1, 3, 2]
13 3 3 2
After:  [3, 1, 0, 2]

Before: [0, 1, 3, 1]
8 3 1 2
After:  [0, 1, 0, 1]

Before: [0, 0, 3, 0]
0 0 0 0
After:  [0, 0, 3, 0]

Before: [2, 3, 3, 1]
12 0 2 1
After:  [2, 2, 3, 1]

Before: [0, 1, 3, 1]
9 1 3 0
After:  [1, 1, 3, 1]

Before: [3, 1, 1, 0]
10 1 3 3
After:  [3, 1, 1, 1]

Before: [1, 1, 0, 1]
6 1 0 0
After:  [1, 1, 0, 1]

Before: [0, 2, 0, 0]
0 0 0 0
After:  [0, 2, 0, 0]

Before: [3, 0, 2, 3]
3 2 0 0
After:  [1, 0, 2, 3]

Before: [0, 2, 2, 3]
0 0 0 2
After:  [0, 2, 0, 3]

Before: [0, 3, 3, 3]
11 3 3 2
After:  [0, 3, 3, 3]

Before: [3, 1, 1, 3]
5 3 0 3
After:  [3, 1, 1, 1]

Before: [1, 2, 0, 3]
11 3 3 2
After:  [1, 2, 3, 3]

Before: [0, 3, 1, 1]
0 0 0 1
After:  [0, 0, 1, 1]

Before: [2, 1, 0, 0]
10 1 3 1
After:  [2, 1, 0, 0]

Before: [2, 1, 0, 1]
9 1 3 1
After:  [2, 1, 0, 1]

Before: [2, 3, 2, 3]
3 2 1 1
After:  [2, 1, 2, 3]

Before: [0, 3, 0, 2]
0 0 0 3
After:  [0, 3, 0, 0]

Before: [0, 2, 2, 3]
11 2 2 2
After:  [0, 2, 2, 3]

Before: [3, 2, 2, 1]
15 3 2 0
After:  [1, 2, 2, 1]

Before: [2, 3, 2, 3]
11 2 2 2
After:  [2, 3, 2, 3]

Before: [1, 0, 2, 1]
15 3 2 3
After:  [1, 0, 2, 1]

Before: [2, 3, 3, 2]
3 0 1 0
After:  [1, 3, 3, 2]

Before: [3, 3, 2, 2]
4 0 2 0
After:  [1, 3, 2, 2]

Before: [3, 1, 3, 2]
14 1 3 3
After:  [3, 1, 3, 0]

Before: [2, 1, 2, 3]
2 1 2 0
After:  [0, 1, 2, 3]

Before: [3, 1, 3, 3]
5 3 0 0
After:  [1, 1, 3, 3]

Before: [0, 1, 2, 2]
2 1 2 0
After:  [0, 1, 2, 2]

Before: [1, 1, 2, 3]
6 1 0 0
After:  [1, 1, 2, 3]

Before: [1, 3, 2, 2]
1 0 2 2
After:  [1, 3, 0, 2]

Before: [1, 1, 2, 0]
2 1 2 0
After:  [0, 1, 2, 0]

Before: [1, 2, 0, 1]
9 0 2 0
After:  [0, 2, 0, 1]

Before: [3, 2, 2, 3]
4 0 2 0
After:  [1, 2, 2, 3]

Before: [2, 2, 3, 2]
12 0 2 2
After:  [2, 2, 2, 2]

Before: [2, 0, 2, 1]
15 3 2 0
After:  [1, 0, 2, 1]

Before: [2, 1, 2, 3]
5 2 0 0
After:  [1, 1, 2, 3]

Before: [2, 1, 2, 1]
9 1 3 0
After:  [1, 1, 2, 1]

Before: [3, 3, 2, 0]
3 2 1 0
After:  [1, 3, 2, 0]

Before: [1, 3, 2, 3]
1 0 2 3
After:  [1, 3, 2, 0]

Before: [0, 0, 2, 1]
15 3 2 3
After:  [0, 0, 2, 1]

Before: [1, 3, 2, 2]
1 0 2 1
After:  [1, 0, 2, 2]

Before: [3, 0, 3, 3]
5 3 0 0
After:  [1, 0, 3, 3]

Before: [2, 3, 1, 3]
7 2 3 2
After:  [2, 3, 0, 3]

Before: [0, 1, 0, 2]
14 1 3 1
After:  [0, 0, 0, 2]

Before: [2, 1, 2, 1]
2 1 2 3
After:  [2, 1, 2, 0]

Before: [2, 0, 1, 3]
7 2 3 1
After:  [2, 0, 1, 3]

Before: [1, 1, 1, 2]
14 1 3 0
After:  [0, 1, 1, 2]

Before: [2, 1, 0, 1]
4 0 1 0
After:  [1, 1, 0, 1]

Before: [2, 3, 0, 2]
3 0 1 0
After:  [1, 3, 0, 2]

Before: [2, 3, 2, 2]
5 2 0 3
After:  [2, 3, 2, 1]

Before: [0, 0, 2, 1]
15 3 2 0
After:  [1, 0, 2, 1]

Before: [1, 1, 3, 2]
14 1 3 2
After:  [1, 1, 0, 2]

Before: [1, 3, 0, 3]
9 0 2 3
After:  [1, 3, 0, 0]

Before: [1, 3, 3, 1]
13 3 3 0
After:  [0, 3, 3, 1]

Before: [3, 2, 2, 1]
4 0 2 1
After:  [3, 1, 2, 1]

Before: [2, 3, 1, 1]
3 0 1 3
After:  [2, 3, 1, 1]

Before: [1, 1, 0, 0]
9 0 2 3
After:  [1, 1, 0, 0]

Before: [2, 1, 3, 0]
8 2 0 0
After:  [1, 1, 3, 0]

Before: [2, 2, 2, 0]
5 2 1 1
After:  [2, 1, 2, 0]

Before: [1, 1, 2, 1]
6 1 0 2
After:  [1, 1, 1, 1]

Before: [0, 3, 1, 0]
0 0 0 2
After:  [0, 3, 0, 0]

Before: [1, 3, 2, 2]
8 3 2 1
After:  [1, 0, 2, 2]

Before: [1, 1, 1, 0]
10 1 3 2
After:  [1, 1, 1, 0]

Before: [1, 2, 2, 0]
11 2 2 1
After:  [1, 2, 2, 0]

Before: [2, 1, 2, 2]
11 2 2 2
After:  [2, 1, 2, 2]

Before: [1, 3, 2, 1]
15 3 2 1
After:  [1, 1, 2, 1]

Before: [0, 2, 3, 3]
0 0 0 0
After:  [0, 2, 3, 3]

Before: [0, 2, 2, 3]
11 2 2 0
After:  [2, 2, 2, 3]

Before: [3, 2, 3, 3]
5 3 2 2
After:  [3, 2, 1, 3]

Before: [2, 0, 3, 3]
12 0 2 2
After:  [2, 0, 2, 3]

Before: [2, 1, 1, 1]
9 1 3 0
After:  [1, 1, 1, 1]

Before: [1, 1, 2, 1]
9 1 3 2
After:  [1, 1, 1, 1]

Before: [1, 1, 2, 2]
11 2 2 3
After:  [1, 1, 2, 2]

Before: [2, 1, 3, 2]
12 3 2 0
After:  [2, 1, 3, 2]

Before: [1, 1, 0, 2]
9 0 2 0
After:  [0, 1, 0, 2]

Before: [1, 1, 3, 3]
6 1 0 3
After:  [1, 1, 3, 1]

Before: [1, 3, 0, 2]
13 3 3 2
After:  [1, 3, 0, 2]

Before: [1, 1, 0, 0]
6 1 0 3
After:  [1, 1, 0, 1]

Before: [3, 2, 3, 3]
5 3 0 3
After:  [3, 2, 3, 1]

Before: [1, 1, 1, 3]
8 2 1 3
After:  [1, 1, 1, 0]

Before: [3, 1, 2, 2]
14 1 3 0
After:  [0, 1, 2, 2]

Before: [1, 0, 2, 0]
1 0 2 1
After:  [1, 0, 2, 0]

Before: [2, 1, 3, 3]
7 1 3 2
After:  [2, 1, 0, 3]

Before: [1, 1, 2, 1]
2 1 2 0
After:  [0, 1, 2, 1]

Before: [2, 1, 0, 2]
14 1 3 1
After:  [2, 0, 0, 2]

Before: [0, 3, 2, 1]
15 3 2 3
After:  [0, 3, 2, 1]

Before: [2, 3, 3, 3]
3 0 1 3
After:  [2, 3, 3, 1]

Before: [3, 0, 2, 3]
4 0 2 1
After:  [3, 1, 2, 3]

Before: [0, 2, 1, 3]
7 2 3 1
After:  [0, 0, 1, 3]

Before: [1, 3, 2, 0]
3 2 1 3
After:  [1, 3, 2, 1]

Before: [3, 2, 3, 3]
5 3 0 0
After:  [1, 2, 3, 3]

Before: [2, 0, 0, 1]
8 0 1 0
After:  [1, 0, 0, 1]

Before: [2, 1, 3, 1]
9 1 3 2
After:  [2, 1, 1, 1]

Before: [0, 2, 2, 1]
11 2 2 1
After:  [0, 2, 2, 1]

Before: [0, 1, 0, 3]
0 0 0 3
After:  [0, 1, 0, 0]

Before: [2, 1, 1, 3]
4 0 1 1
After:  [2, 1, 1, 3]

Before: [3, 3, 2, 2]
3 2 0 0
After:  [1, 3, 2, 2]

Before: [2, 2, 3, 2]
12 1 2 0
After:  [2, 2, 3, 2]

Before: [3, 0, 2, 1]
11 2 2 2
After:  [3, 0, 2, 1]

Before: [2, 0, 3, 2]
8 2 0 0
After:  [1, 0, 3, 2]

Before: [0, 1, 2, 1]
0 0 0 0
After:  [0, 1, 2, 1]

Before: [1, 2, 2, 1]
1 0 2 0
After:  [0, 2, 2, 1]

Before: [2, 1, 1, 1]
8 2 1 0
After:  [0, 1, 1, 1]

Before: [1, 1, 2, 2]
14 1 3 1
After:  [1, 0, 2, 2]

Before: [0, 3, 3, 2]
12 3 2 0
After:  [2, 3, 3, 2]

Before: [0, 3, 2, 1]
15 3 2 1
After:  [0, 1, 2, 1]

Before: [2, 2, 3, 0]
8 2 0 0
After:  [1, 2, 3, 0]

Before: [3, 3, 2, 1]
4 0 2 1
After:  [3, 1, 2, 1]

Before: [1, 1, 2, 2]
14 1 3 2
After:  [1, 1, 0, 2]

Before: [3, 2, 3, 3]
12 1 2 1
After:  [3, 2, 3, 3]

Before: [1, 1, 2, 2]
6 1 0 1
After:  [1, 1, 2, 2]

Before: [2, 1, 3, 0]
10 1 3 0
After:  [1, 1, 3, 0]

Before: [2, 1, 2, 1]
15 3 2 0
After:  [1, 1, 2, 1]

Before: [1, 3, 3, 3]
11 3 3 2
After:  [1, 3, 3, 3]

Before: [3, 3, 2, 2]
8 3 2 3
After:  [3, 3, 2, 0]

Before: [2, 1, 0, 1]
4 0 1 2
After:  [2, 1, 1, 1]

Before: [1, 1, 0, 3]
7 1 3 2
After:  [1, 1, 0, 3]

Before: [2, 3, 3, 2]
12 3 2 3
After:  [2, 3, 3, 2]

Before: [1, 2, 0, 3]
9 0 2 0
After:  [0, 2, 0, 3]

Before: [1, 0, 0, 0]
9 0 2 0
After:  [0, 0, 0, 0]

Before: [2, 2, 3, 3]
12 0 2 0
After:  [2, 2, 3, 3]

Before: [2, 3, 3, 3]
11 3 3 1
After:  [2, 3, 3, 3]

Before: [0, 3, 2, 3]
11 2 2 1
After:  [0, 2, 2, 3]

Before: [2, 2, 3, 3]
12 1 2 0
After:  [2, 2, 3, 3]

Before: [3, 1, 1, 0]
10 1 3 1
After:  [3, 1, 1, 0]

Before: [3, 1, 2, 1]
9 1 3 3
After:  [3, 1, 2, 1]

Before: [1, 2, 1, 3]
7 1 3 3
After:  [1, 2, 1, 0]

Before: [2, 1, 2, 1]
2 1 2 2
After:  [2, 1, 0, 1]

Before: [2, 1, 3, 2]
14 1 3 1
After:  [2, 0, 3, 2]

Before: [1, 1, 1, 3]
6 1 0 3
After:  [1, 1, 1, 1]

Before: [0, 1, 1, 2]
14 1 3 3
After:  [0, 1, 1, 0]

Before: [3, 1, 0, 3]
8 0 2 0
After:  [1, 1, 0, 3]

Before: [1, 0, 2, 1]
15 3 2 0
After:  [1, 0, 2, 1]

Before: [0, 1, 2, 2]
13 3 3 1
After:  [0, 0, 2, 2]

Before: [3, 1, 2, 1]
15 3 2 0
After:  [1, 1, 2, 1]

Before: [1, 1, 1, 2]
6 1 0 0
After:  [1, 1, 1, 2]

Before: [1, 1, 2, 1]
13 3 3 2
After:  [1, 1, 0, 1]

Before: [0, 1, 1, 1]
0 0 0 3
After:  [0, 1, 1, 0]

Before: [0, 1, 0, 0]
10 1 3 3
After:  [0, 1, 0, 1]

Before: [1, 1, 0, 0]
6 1 0 1
After:  [1, 1, 0, 0]

Before: [0, 1, 2, 1]
13 3 3 0
After:  [0, 1, 2, 1]

Before: [1, 3, 2, 3]
3 2 1 0
After:  [1, 3, 2, 3]

Before: [1, 2, 0, 2]
9 0 2 2
After:  [1, 2, 0, 2]

Before: [1, 3, 2, 1]
15 3 2 3
After:  [1, 3, 2, 1]

Before: [2, 2, 0, 3]
7 1 3 2
After:  [2, 2, 0, 3]

Before: [1, 1, 2, 3]
7 1 3 0
After:  [0, 1, 2, 3]

Before: [1, 0, 2, 1]
1 0 2 3
After:  [1, 0, 2, 0]

Before: [1, 2, 2, 2]
1 0 2 0
After:  [0, 2, 2, 2]

Before: [1, 1, 0, 3]
6 1 0 1
After:  [1, 1, 0, 3]

Before: [1, 2, 2, 2]
1 0 2 1
After:  [1, 0, 2, 2]

Before: [1, 1, 2, 3]
7 2 3 2
After:  [1, 1, 0, 3]

Before: [1, 1, 0, 2]
14 1 3 3
After:  [1, 1, 0, 0]

Before: [0, 1, 1, 2]
0 0 0 3
After:  [0, 1, 1, 0]

Before: [1, 0, 1, 1]
13 2 3 3
After:  [1, 0, 1, 0]

Before: [3, 1, 2, 2]
14 1 3 1
After:  [3, 0, 2, 2]

Before: [2, 1, 1, 0]
4 0 1 2
After:  [2, 1, 1, 0]

Before: [0, 2, 1, 1]
13 3 3 0
After:  [0, 2, 1, 1]

Before: [0, 3, 1, 3]
11 3 3 1
After:  [0, 3, 1, 3]

Before: [1, 3, 0, 2]
9 0 2 3
After:  [1, 3, 0, 0]

Before: [3, 2, 2, 3]
7 2 3 0
After:  [0, 2, 2, 3]

Before: [2, 1, 2, 2]
2 1 2 1
After:  [2, 0, 2, 2]

Before: [2, 2, 2, 1]
15 3 2 2
After:  [2, 2, 1, 1]

Before: [3, 3, 1, 1]
13 3 3 3
After:  [3, 3, 1, 0]

Before: [2, 2, 2, 3]
5 2 0 3
After:  [2, 2, 2, 1]

Before: [0, 3, 2, 3]
11 3 3 3
After:  [0, 3, 2, 3]

Before: [2, 3, 2, 0]
3 2 1 2
After:  [2, 3, 1, 0]

Before: [2, 1, 2, 1]
2 1 2 0
After:  [0, 1, 2, 1]

Before: [3, 3, 1, 3]
7 2 3 2
After:  [3, 3, 0, 3]

Before: [3, 0, 2, 0]
11 2 2 0
After:  [2, 0, 2, 0]

Before: [0, 3, 1, 2]
0 0 0 2
After:  [0, 3, 0, 2]

Before: [1, 1, 2, 0]
2 1 2 1
After:  [1, 0, 2, 0]

Before: [3, 1, 3, 2]
12 3 2 3
After:  [3, 1, 3, 2]

Before: [0, 0, 1, 2]
0 0 0 0
After:  [0, 0, 1, 2]

Before: [3, 1, 1, 1]
8 3 1 1
After:  [3, 0, 1, 1]

Before: [0, 0, 2, 1]
0 0 0 0
After:  [0, 0, 2, 1]

Before: [1, 1, 2, 3]
1 0 2 1
After:  [1, 0, 2, 3]

Before: [2, 3, 2, 0]
3 2 1 1
After:  [2, 1, 2, 0]

Before: [1, 3, 3, 2]
12 3 2 1
After:  [1, 2, 3, 2]

Before: [0, 1, 3, 2]
0 0 0 1
After:  [0, 0, 3, 2]

Before: [2, 1, 2, 0]
10 1 3 2
After:  [2, 1, 1, 0]

Before: [2, 2, 3, 2]
12 0 2 0
After:  [2, 2, 3, 2]

Before: [2, 0, 2, 3]
7 2 3 0
After:  [0, 0, 2, 3]

Before: [3, 1, 3, 3]
11 3 3 2
After:  [3, 1, 3, 3]

Before: [3, 1, 3, 0]
10 1 3 3
After:  [3, 1, 3, 1]

Before: [0, 1, 1, 3]
7 2 3 0
After:  [0, 1, 1, 3]

Before: [1, 1, 2, 0]
1 0 2 2
After:  [1, 1, 0, 0]

Before: [1, 1, 1, 0]
10 1 3 3
After:  [1, 1, 1, 1]

Before: [1, 1, 3, 2]
13 3 3 3
After:  [1, 1, 3, 0]

Before: [2, 0, 3, 1]
8 0 1 0
After:  [1, 0, 3, 1]

Before: [3, 2, 2, 3]
3 2 0 0
After:  [1, 2, 2, 3]

Before: [0, 3, 2, 3]
0 0 0 2
After:  [0, 3, 0, 3]

Before: [2, 2, 1, 2]
13 3 3 3
After:  [2, 2, 1, 0]

Before: [0, 2, 3, 3]
5 3 2 0
After:  [1, 2, 3, 3]

Before: [2, 1, 2, 2]
2 1 2 3
After:  [2, 1, 2, 0]

Before: [2, 1, 0, 3]
4 0 1 1
After:  [2, 1, 0, 3]

Before: [2, 1, 1, 0]
10 1 3 0
After:  [1, 1, 1, 0]

Before: [2, 3, 3, 2]
12 3 2 1
After:  [2, 2, 3, 2]

Before: [3, 2, 3, 1]
5 2 3 2
After:  [3, 2, 0, 1]

Before: [3, 3, 3, 1]
5 2 3 1
After:  [3, 0, 3, 1]

Before: [1, 1, 3, 3]
7 1 3 1
After:  [1, 0, 3, 3]

Before: [2, 1, 2, 3]
2 1 2 2
After:  [2, 1, 0, 3]

Before: [3, 1, 2, 3]
2 1 2 0
After:  [0, 1, 2, 3]

Before: [3, 1, 3, 1]
5 2 3 0
After:  [0, 1, 3, 1]

Before: [0, 2, 3, 3]
12 1 2 2
After:  [0, 2, 2, 3]

Before: [1, 0, 2, 2]
1 0 2 0
After:  [0, 0, 2, 2]

Before: [1, 1, 1, 2]
6 1 0 3
After:  [1, 1, 1, 1]

Before: [0, 3, 3, 1]
13 3 3 0
After:  [0, 3, 3, 1]

Before: [2, 1, 2, 1]
4 0 1 3
After:  [2, 1, 2, 1]

Before: [1, 1, 1, 3]
7 2 3 1
After:  [1, 0, 1, 3]

Before: [0, 3, 1, 2]
0 0 0 0
After:  [0, 3, 1, 2]

Before: [3, 3, 2, 2]
4 0 2 1
After:  [3, 1, 2, 2]

Before: [0, 3, 2, 2]
3 2 1 2
After:  [0, 3, 1, 2]

Before: [3, 1, 1, 3]
7 2 3 3
After:  [3, 1, 1, 0]

Before: [2, 1, 2, 1]
15 3 2 1
After:  [2, 1, 2, 1]

Before: [1, 1, 1, 0]
6 1 0 3
After:  [1, 1, 1, 1]

Before: [1, 3, 3, 2]
12 3 2 2
After:  [1, 3, 2, 2]

Before: [3, 1, 1, 2]
14 1 3 1
After:  [3, 0, 1, 2]

Before: [0, 2, 2, 3]
0 0 0 0
After:  [0, 2, 2, 3]

Before: [1, 1, 2, 3]
6 1 0 3
After:  [1, 1, 2, 1]

Before: [1, 1, 1, 0]
6 1 0 1
After:  [1, 1, 1, 0]

Before: [2, 3, 1, 3]
7 2 3 3
After:  [2, 3, 1, 0]

Before: [0, 1, 3, 0]
0 0 0 0
After:  [0, 1, 3, 0]

Before: [3, 0, 0, 3]
11 3 3 0
After:  [3, 0, 0, 3]

Before: [3, 1, 2, 1]
9 1 3 0
After:  [1, 1, 2, 1]

Before: [3, 0, 2, 1]
15 3 2 0
After:  [1, 0, 2, 1]

Before: [1, 1, 1, 1]
6 1 0 1
After:  [1, 1, 1, 1]
EOT;

/*
$tt = <<<EOT
Before: [3, 2, 1, 1]
9 2 1 2
After:  [3, 2, 2, 1]
EOT;
*/


//echo $tt;

$t = str_replace('  ',' ',$tt);

$t = explode("\n\n", $t);

function op($code, $a, $b, $c, $reg)
{
	switch ($code) {
		case 0:
			// addr (add register) stores into register C the result of adding register A and register B.
			$reg[$c] = $reg[$a] + $reg[$b];
			break;
	    case 1:
	    		// addi (add immediate) stores into register C the result of adding register A and value B.
			$reg[$c] = $reg[$a] + $b;
	        break;

	    case 2:
	    		// mulr (multiply register) stores into register C the result of multiplying register A and register B.
			$reg[$c] = $reg[$a] * $reg[$b];
	        break;
	    case 3:
	    		// muli (multiply immediate) stores into register C the result of multiplying register A and value B.
			$reg[$c] = $reg[$a] * $b;
	        break;

	    case 4:
	    		// banr (bitwise AND register) stores into register C the result of the bitwise AND of register A and register B.
			$reg[$c] = $reg[$a] & $reg[$b];
	        break;
	    case 5:
	    		// bani (bitwise AND immediate) stores into register C the result of the bitwise AND of register A and value B.
			$reg[$c] = $reg[$a] & $b;
	        break;
	        
	    case 6:
	    		// borr (bitwise OR register) stores into register C the result of the bitwise OR of register A and register B.
			$reg[$c] = $reg[$a] | $reg[$b];
	        break;
	    case 7:
	    		// bori (bitwise OR immediate) stores into register C the result of the bitwise OR of register A and value B.
			$reg[$c] = $reg[$a] | $b;
//			echo "\n", $reg[$a], " | ", $b, " = ", $reg[$c];
	        break;
	        
	    case 8:
	    		// setr (set register) copies the contents of register A into register C. (Input B is ignored.)
			$reg[$c] = $reg[$a];
	        break;
	    case 9:
	    		// seti (set immediate) stores value A into register C. (Input B is ignored.)
			$reg[$c] = $a;
	        break;
	        
	    case 10:
	    		// gtir (greater-than immediate/register) sets register C to 1 if value A is greater than register B. Otherwise, register C is set to 0.
	    		$reg[$c] = ($a > $reg[$b]) ? 1 : 0;
	        break;
	    case 11:
	    		// gtri (greater-than register/immediate) sets register C to 1 if register A is greater than value B. Otherwise, register C is set to 0.
	    		$reg[$c] = ($reg[$a] > $b) ? 1 : 0;
	    case 12:
	    		// gtrr (greater-than register/register) sets register C to 1 if register A is greater than register B. Otherwise, register C is set to 0.
	    		$reg[$c] = ($reg[$a] > $reg[$b]) ? 1 : 0;
	        break;
	        
	    case 13:
	    		// eqir (equal immediate/register) sets register C to 1 if value A is equal to register B. Otherwise, register C is set to 0.
	    		$reg[$c] = ($a == $reg[$b]) ? 1 : 0;
	        break;
	    case 14:
	    		// eqri (equal register/immediate) sets register C to 1 if register A is equal to value B. Otherwise, register C is set to 0.
	    		$reg[$c] = ($reg[$a] == $b) ? 1 : 0;
	    case 15:
	    		// eqrr (equal register/register) sets register C to 1 if register A is equal to register B. Otherwise, register C is set to 0.
	    		$reg[$c] = ($reg[$a] == $reg[$b]) ? 1 : 0;
	        break;
	        
	}	

	return $reg;
}

$u = 0;

$codes = [];

foreach ($t as $l)
{
	$l = explode("\n", $l);
//	print_r($l);
	$before = $l[0];
	$before = str_replace(['Before',':','[',']',' '],'',$before);
//	echo "\n$before";
	$before = explode(',',$before);
	$before[0] = (int)$before[0];
	$before[1] = (int)$before[1];
	$before[2] = (int)$before[2];
	$before[3] = (int)$before[3];
//	print_r($before);

	$after = $l[2];
	$after = str_replace(['After',':','[',']',' '],'',$after);
//	echo "\n$after";
	$after = explode(',',$after);
	$after[0] = (int)$after[0];
	$after[1] = (int)$after[1];
	$after[2] = (int)$after[2];
	$after[3] = (int)$after[3];
//	print_r($after);

	$instr = $l[1];
	$instr = str_replace(['After',':','[',']'],'',$instr);
//	echo "\n$instr";
	$instr = explode(' ',trim($instr));
	$instr[0] = (int)$instr[0];
	$instr[1] = (int)$instr[1];
	$instr[2] = (int)$instr[2];
	$instr[3] = (int)$instr[3];
//	print_r($instr);

	$count = 0;
	$code = 16;
	$cur = '';
	while ($code--)
	{
		if (! in_array($code, $codes))
		{
	//		echo "\ncode: $code";
			$result = op($code, $instr[1], $instr[2], $instr[3], $before);
	//		print_r($result);
			if ($result == $after) 
			{
	//			echo "\nB I N G O";
				echo "\n", $instr[0], " is $code";
				$cur = $code;
				$count++;
			}
			else
			{
				if (($result[0] == $after[0]) &&
					($result[1] == $after[1]) &&
					($result[2] == $after[2]) &&
					($result[3] == $after[3]))
				echo "\n B O O ! ! !";
			}
		}
		
	}

	if ($count > 2) $u++;
	if ($count == 1)
	{
		// we found the code
		$codes[$instr[0]] = $cur;
	}
//	echo "\ncount: $count";
//	echo "\n";
}

ksort($codes);
print_r($codes);
echo "\n", count($t);

echo "\ntotal: $u";

echo "\n· • · • · • · S L U T · • · • · • ·";

?>