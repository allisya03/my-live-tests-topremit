SELECT
    m.memid AS id,
    CONCAT(m.firstname, ' ', m.surname) AS fullname,
    COUNT(b.bookid) AS count_bookings,
    f.name AS latest_facilities_name
FROM
    cd.members AS m
LEFT JOIN
    cd.bookings AS b ON m.memid = b.memid
LEFT JOIN
    cd.facilities AS f ON b.facid = f.facid
WHERE
    b.starttime = (
        SELECT
            MAX(starttime)
        FROM
            cd.bookings
        WHERE
            memid = m.memid
    )
GROUP BY
    m.memid, m.firstname, m.surname, f.name
ORDER BY
    m.memid;