// moment().defineLocale('vi')
setInterval(() => {
    const dayOfWeekString = ['Chủ nhật', 'Thứ hai', 'thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy'];
    const month = moment().format('MM');
    const day = moment().format('DD')
    const year = moment().format('YYYY')
    const time = moment().format('HH:mm:ss')
    const dayOfWeek = moment().format('e')
    
    const dateTime = `${dayOfWeekString[dayOfWeek]}, Ngày ${day} tháng ${month} năm ${year} - ${time}`
    
    document.querySelector('.time').textContent = dateTime
}, 1000)


const listPrice = document.querySelectorAll('.price_value')
console.log(listPrice)