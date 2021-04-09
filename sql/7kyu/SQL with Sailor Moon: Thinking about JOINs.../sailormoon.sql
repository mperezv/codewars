SELECT sailorsenshi.senshi_name AS sailor_senshi, sailorsenshi.real_name_jpn AS real_name,
       schools.school, cats.name AS cat
FROM sailorsenshi
LEFT JOIN cats
ON sailorsenshi.cat_id = cats.id
LEFT JOIN schools
ON sailorsenshi.school_id = schools.id
