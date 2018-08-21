<?php
namespace marshung\helper;

/**
 * Date/Time Helper for PHP code
 * 
 * @author Mars Hung <tfaredxj@gmail.com>
 */
class DatetimeHelper
{
    
    /**
     * *********************************************
     * ************** Public Function **************
     * *********************************************
     */
    
    
    
    
    /**
     * 日期計算
     * @param unknown $date
     */
    public static function dateAdd($date, $add = '1', $unit = 'day', $format = 'Y-m-d')
    {
        return date($format, strtotime($date . ' + ' . $add. ' ' . $unit));
    }
    
    /**
     * 日期計算
     * @param unknown $date
     */
    public static function dateReduce($date, $reduce = '1', $unit = 'day', $format = 'Y-m-d')
    {
        return date($format, strtotime($date . ' - ' . $reduce. ' ' . $unit));
    }
    
    /**
     * 日期計算
     * @param unknown $date
     */
    public static function dateCal($date, $difference = '1', $unit = 'day', $format = 'Y-m-d')
    {
        return date($format, strtotime($date . ($difference < 0 ? ' ': ' + ') . $difference . ' ' . $unit));
    }
    
    /**
     * 轉換格式
     */
    public static function format()
    {}
    
    /**
     * 西元年轉民國年
     */
    public static function toDateRoc()
    {}
    
    /**
     * 民國年轉西元年
     */
    public static function fromDateRoc()
    {}
    
    
    
    /**
     * ***********************************************
     * ************** Vaildate Function **************
     * ***********************************************
     */
    
    /**
     * 判斷日期是否合法
     *
     * @param string $date
     *            日期字串 YYYY-MM-DD
     * @return boolean
     */
    public static function isDate($date)
    {
        // 不合法，但常用
        if ($date == '0000-00-00') {
            return true;
        }
        // 檢查
        if (preg_match('|^([0-9]{4})[\-\/]([0-9]{1,2})[\-\/]([0-9]{1,2})$|', $date, $matches)) {
            // 有分隔符號 Y-m-d, Y/m/d
            return checkdate($matches[2], $matches[3], $matches[1]);
        } elseif (preg_match('|^([0-9]{4})([0-9]{2})([0-9]{2})$|', $date, $matches)) {
            // 無分隔符號 Ymd
            return checkdate($matches[2], $matches[3], $matches[1]);
        }
        
        return false;
    }
    
    public static function isTime()
    {}
    
    public static function isDatetime()
    {}
    
    /**
     * **********************************************
     * ************** Private Function **************
     * **********************************************
     */
}