function hammingDist(DNA1, DNA2) {
  let i = 0,
    count = 0;
  while (i < DNA1.length) {
    if (DNA1[i] != DNA2[i]) count++;
    i++;
  }
  return count;
}

let DNA1 = " GAGCCTACTAACGGGAT";
let DNA2 = " CATCGTAATGACGGCCT";

document.write(hammingDist(DNA1, DNA2));

//Angelo dionisio
